<?php

namespace Smart\Data\BrowserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {        
        return $this->render('SmartDataBrowserBundle:Default:index.html.twig', array());
    }
    
    public function getGridDataAction()
    {
        $postData = $this->getPostData();
        $gridId   = $postData['grid_id'];
        $grid     = $this->getGridParams($gridId);
        $page     = $postData['page'];
        $per_page = $postData['rows'];
        $postSortCols = array_filter(explode(", ", $postData['sidx']));
        $sortType = $postData['sord'];       
        if(!isset($page)){ $page = 1; }
    	$offset = ($page * $per_page) - $per_page;
    	if($offset < 0){ $offset = 0; }    
        $paginationOpts = array('per_page'=> $per_page, 'offset'=>$offset);
        $entityData = $this->getEntityData($grid, $sortType, $postSortCols, $paginationOpts, $postData);          
        
        $totalItems = $entityData['totalItems'];
        $ret = array('page' => $page, 'total' => ceil( $totalItems / $per_page ),
                     'records' => $totalItems, 'rows' => array());

        $preparedData = $this->userDataPrepare($ret, $entityData['data'], $grid);           
        $response = new JsonResponse();
        $response->setData($preparedData);        
        return $response;        
    }
    
    private function getEntityData($grid, $sortType, $postSortCols, $paginationOpts, $postData)
    {
        $gridEm = $grid['grid.entity.manager'];
        $em = $this->getDoctrine()->getManager();
        if($gridEm != 'default')
        {
            $em = $this->getDoctrine()->getManager($gridEm);    
        }       
        $parameters = array(); 
        if($grid['grid.entity'] != 'none')
        {
            $qb = $em->createQueryBuilder();
            $qb->select('u')->from($grid['grid.entity'], 'u');  
        }else{
            $service = $grid['grid.query.service'];
            $method  = $grid['grid.query.service.method'];
            $serviceData = $this->get($service)->$method();
            if(is_array($serviceData))
            {
                $qb = $serviceData['qb'];
                $parameters = $serviceData['parameters'];
            }else{
                $qb = $serviceData;
            }
        }
       
        if(!empty($postSortCols))
        {
            $orderString = 'u.' . join(', u.', $postSortCols);
            $qb->orderBy($orderString, $sortType);
        }
        $qbWithFilters = $this->userDataFilters($qb, $postData, $parameters, $grid);
        $query = $em->createQuery($qbWithFilters['qb']->getQuery()->getDql());
        $query->setParameters($qbWithFilters['parameters']);
        $query->setMaxResults($paginationOpts['per_page'])
              ->setFirstResult($paginationOpts['offset']);        
        $data = $query->getResult();
        
        $qbWithFilters['qb']->select('COUNT(u.id)')->getQuery();
        $totalItems = $em->createQuery($qbWithFilters['qb']->getDql()) 
                         ->setParameters($qbWithFilters['parameters'])
                         ->getSingleScalarResult();
        return array('data' => $data, 'totalItems' => $totalItems);
    }
    
    private function userDataFilters($qb, $postData, $parameters, $grid)
    {
        $colModel = $this->getGridColModel($grid['grid.id']);
        foreach($colModel as $col)
        {
            if(isset($postData[$col['name']]))
            {      
                $qb->andWhere(
                    $qb->expr()->like($qb->expr()->upper('u.'.$col['name']), $qb->expr()->upper(':'.$col['name']))
                );
                $parameters[$col['name']] = "%" . $postData[$col['name']] . "%";            
            } 
        }
        return array('qb' => $qb, 'parameters' => $parameters);
    }
    
    public function getGridStructureAction()
    {
        $postData = $this->getPostData();
        $gridId = $postData['grid_id'];
        $colModel = $this->getGridColModel($gridId);
        $colNames = $this->getGridColNames($gridId);
        $response = new JsonResponse();
        $response->setData(array( 'colModel' => $colModel, 'colNames' => $colNames ));
        return $response;
    }
    
    public function getGridColModel($gridId)
    {
        $gridArr = $this->getGridParams($gridId);
        $colModel = array();    
        foreach($gridArr['grid.col.model'] as $col)
        {
            if(is_array($col))
            {
                $prop = array();
                $prop['name'] = key($col);
                foreach($col[key($col)] as $name => $v){ $prop[$name] = $v; }  
                $colModel[] = $prop;
            }else{
               $colModel[] = array('name' => $col); 
            }
        }
        return $colModel;
    } 
    
    public function getGridColNames($gridId)
    {
        $gridArr = $this->getGridParams($gridId);
        return $gridArr['grid.col.names'];
    }
    
    private function userDataPrepare($ret, $data, $grid)
    {
        $colModel = $this->getGridColModel($grid['grid.id']);
        foreach($data as $d)
        {
            $cell = array();
            foreach($colModel as $col)
            {
                $method = 'get'.ucfirst($col['name']);
                if(!isset($col['type'])){
                    $cell[] = $d->$method();
                }else{
                    $cell[] = $this->formatDataByType($col, $d, $method);               
                }
            }            
            $ret['rows'][] = array(
                'id' => $d->getId(),
                'cell' => $cell
            );
        }       
        return $ret;
    }
    
    private function formatDataByType($col, $data, $method)
    {
        $value = 0;
        if($col['type'] == 'date'){
            if(is_object($data->$method())) // date field may not be mandatory
            {
                $value = $data->$method()->format('d-m-Y H:i');
            }
        }else if($col['type'] == 'entity'){
            $property = ucfirst($col['property']);
            $method = 'get'.$property;
            $value = $data->$method();
        }else if($col['type'] == 'custom'){
            $value = '---';
        }else if($col['type'] == 'convertible'){
            $value = $col['convert'][$data->$col['method']()];
        }  
        return $value;
    }
    
    private function getGridParams($id)
    {
        $grid = $this->container->getParameter('browser.data.'.$id);
        return $grid;
    }
    
    private function getPostData()
    {
        $request = Request::createFromGlobals();
        $postData = $request->request->all();
        return $postData;
    }
}
