<?php

namespace Smart\Data\BrowserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserData
 */
class UserData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $adstatus;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $countrycode;

    /**
     * @var string
     */
    private $datadescriptor;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var \DateTime
     */
    private $employeeenddate;

    /**
     * @var string
     */
    private $employeeid;

    /**
     * @var \DateTime
     */
    private $employeestartdate;

    /**
     * @var string
     */
    private $employeetype;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $firstnamecyr;

    /**
     * @var string
     */
    private $hierarchylevel0;

    /**
     * @var string
     */
    private $hierarchylevel0bg;

    /**
     * @var string
     */
    private $hierarchylevel1;

    /**
     * @var string
     */
    private $hierarchylevel1bg;

    /**
     * @var string
     */
    private $hierarchylevel2;

    /**
     * @var string
     */
    private $hierarchylevel2bg;

    /**
     * @var string
     */
    private $hierarchylevel3;

    /**
     * @var string
     */
    private $hierarchylevel3bg;

    /**
     * @var string
     */
    private $hierarchylevel4;

    /**
     * @var string
     */
    private $hierarchylevel4bg;

    /**
     * @var string
     */
    private $hierarchylevel5;

    /**
     * @var string
     */
    private $hierarchylevel5bg;

    /**
     * @var string
     */
    private $hierarchylevel6;

    /**
     * @var string
     */
    private $hierarchylevel6bg;

    /**
     * @var string
     */
    private $hierarchylevel7;

    /**
     * @var string
     */
    private $hierarchylevel7bg;

    /**
     * @var string
     */
    private $hierarchylevel8;

    /**
     * @var string
     */
    private $hierarchylevel8bg;

    /**
     * @var string
     */
    private $hierarchylevel9;

    /**
     * @var string
     */
    private $hierarchylevel9bg;

    /**
     * @var string
     */
    private $hrstatus;

    /**
     * @var string
     */
    private $jobcode;

    /**
     * @var string
     */
    private $jobtitle;

    /**
     * @var string
     */
    private $jobtitlecyr;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $lastnamecyr;

    /**
     * @var string
     */
    private $mailnickname;

    /**
     * @var string
     */
    private $manager;

    /**
     * @var string
     */
    private $middlename;

    /**
     * @var string
     */
    private $middlenamecyr;

    /**
     * @var string
     */
    private $mobilephone;

    /**
     * @var string
     */
    private $officelocation;

    /**
     * @var string
     */
    private $officephone;

    /**
     * @var string
     */
    private $postalcode;

    /**
     * @var integer
     */
    private $prassid;

    /**
     * @var integer
     */
    private $prassstaid;

    /**
     * @var integer
     */
    private $prperid;

    /**
     * @var string
     */
    private $shopnumber;

    /**
     * @var integer
     */
    private $stjobid;

    /**
     * @var integer
     */
    private $stposid;

    /**
     * @var string
     */
    private $username;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return UserData
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set adstatus
     *
     * @param string $adstatus
     * @return UserData
     */
    public function setAdstatus($adstatus)
    {
        $this->adstatus = $adstatus;

        return $this;
    }

    /**
     * Get adstatus
     *
     * @return string 
     */
    public function getAdstatus()
    {
        return $this->adstatus;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return UserData
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return UserData
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return UserData
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countrycode
     *
     * @param string $countrycode
     * @return UserData
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get countrycode
     *
     * @return string 
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set datadescriptor
     *
     * @param string $datadescriptor
     * @return UserData
     */
    public function setDatadescriptor($datadescriptor)
    {
        $this->datadescriptor = $datadescriptor;

        return $this;
    }

    /**
     * Get datadescriptor
     *
     * @return string 
     */
    public function getDatadescriptor()
    {
        return $this->datadescriptor;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return UserData
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return UserData
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return UserData
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set employeeenddate
     *
     * @param \DateTime $employeeenddate
     * @return UserData
     */
    public function setEmployeeenddate($employeeenddate)
    {
        $this->employeeenddate = $employeeenddate;

        return $this;
    }

    /**
     * Get employeeenddate
     *
     * @return \DateTime 
     */
    public function getEmployeeenddate()
    {
        return $this->employeeenddate;
    }

    /**
     * Set employeeid
     *
     * @param string $employeeid
     * @return UserData
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    /**
     * Get employeeid
     *
     * @return string 
     */
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * Set employeestartdate
     *
     * @param \DateTime $employeestartdate
     * @return UserData
     */
    public function setEmployeestartdate($employeestartdate)
    {
        $this->employeestartdate = $employeestartdate;

        return $this;
    }

    /**
     * Get employeestartdate
     *
     * @return \DateTime 
     */
    public function getEmployeestartdate()
    {
        return $this->employeestartdate;
    }

    /**
     * Set employeetype
     *
     * @param string $employeetype
     * @return UserData
     */
    public function setEmployeetype($employeetype)
    {
        $this->employeetype = $employeetype;

        return $this;
    }

    /**
     * Get employeetype
     *
     * @return string 
     */
    public function getEmployeetype()
    {
        return $this->employeetype;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return UserData
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set firstnamecyr
     *
     * @param string $firstnamecyr
     * @return UserData
     */
    public function setFirstnamecyr($firstnamecyr)
    {
        $this->firstnamecyr = $firstnamecyr;

        return $this;
    }

    /**
     * Get firstnamecyr
     *
     * @return string 
     */
    public function getFirstnamecyr()
    {
        return $this->firstnamecyr;
    }

    /**
     * Set hierarchylevel0
     *
     * @param string $hierarchylevel0
     * @return UserData
     */
    public function setHierarchylevel0($hierarchylevel0)
    {
        $this->hierarchylevel0 = $hierarchylevel0;

        return $this;
    }

    /**
     * Get hierarchylevel0
     *
     * @return string 
     */
    public function getHierarchylevel0()
    {
        return $this->hierarchylevel0;
    }

    /**
     * Set hierarchylevel0bg
     *
     * @param string $hierarchylevel0bg
     * @return UserData
     */
    public function setHierarchylevel0bg($hierarchylevel0bg)
    {
        $this->hierarchylevel0bg = $hierarchylevel0bg;

        return $this;
    }

    /**
     * Get hierarchylevel0bg
     *
     * @return string 
     */
    public function getHierarchylevel0bg()
    {
        return $this->hierarchylevel0bg;
    }

    /**
     * Set hierarchylevel1
     *
     * @param string $hierarchylevel1
     * @return UserData
     */
    public function setHierarchylevel1($hierarchylevel1)
    {
        $this->hierarchylevel1 = $hierarchylevel1;

        return $this;
    }

    /**
     * Get hierarchylevel1
     *
     * @return string 
     */
    public function getHierarchylevel1()
    {
        return $this->hierarchylevel1;
    }

    /**
     * Set hierarchylevel1bg
     *
     * @param string $hierarchylevel1bg
     * @return UserData
     */
    public function setHierarchylevel1bg($hierarchylevel1bg)
    {
        $this->hierarchylevel1bg = $hierarchylevel1bg;

        return $this;
    }

    /**
     * Get hierarchylevel1bg
     *
     * @return string 
     */
    public function getHierarchylevel1bg()
    {
        return $this->hierarchylevel1bg;
    }

    /**
     * Set hierarchylevel2
     *
     * @param string $hierarchylevel2
     * @return UserData
     */
    public function setHierarchylevel2($hierarchylevel2)
    {
        $this->hierarchylevel2 = $hierarchylevel2;

        return $this;
    }

    /**
     * Get hierarchylevel2
     *
     * @return string 
     */
    public function getHierarchylevel2()
    {
        return $this->hierarchylevel2;
    }

    /**
     * Set hierarchylevel2bg
     *
     * @param string $hierarchylevel2bg
     * @return UserData
     */
    public function setHierarchylevel2bg($hierarchylevel2bg)
    {
        $this->hierarchylevel2bg = $hierarchylevel2bg;

        return $this;
    }

    /**
     * Get hierarchylevel2bg
     *
     * @return string 
     */
    public function getHierarchylevel2bg()
    {
        return $this->hierarchylevel2bg;
    }

    /**
     * Set hierarchylevel3
     *
     * @param string $hierarchylevel3
     * @return UserData
     */
    public function setHierarchylevel3($hierarchylevel3)
    {
        $this->hierarchylevel3 = $hierarchylevel3;

        return $this;
    }

    /**
     * Get hierarchylevel3
     *
     * @return string 
     */
    public function getHierarchylevel3()
    {
        return $this->hierarchylevel3;
    }

    /**
     * Set hierarchylevel3bg
     *
     * @param string $hierarchylevel3bg
     * @return UserData
     */
    public function setHierarchylevel3bg($hierarchylevel3bg)
    {
        $this->hierarchylevel3bg = $hierarchylevel3bg;

        return $this;
    }

    /**
     * Get hierarchylevel3bg
     *
     * @return string 
     */
    public function getHierarchylevel3bg()
    {
        return $this->hierarchylevel3bg;
    }

    /**
     * Set hierarchylevel4
     *
     * @param string $hierarchylevel4
     * @return UserData
     */
    public function setHierarchylevel4($hierarchylevel4)
    {
        $this->hierarchylevel4 = $hierarchylevel4;

        return $this;
    }

    /**
     * Get hierarchylevel4
     *
     * @return string 
     */
    public function getHierarchylevel4()
    {
        return $this->hierarchylevel4;
    }

    /**
     * Set hierarchylevel4bg
     *
     * @param string $hierarchylevel4bg
     * @return UserData
     */
    public function setHierarchylevel4bg($hierarchylevel4bg)
    {
        $this->hierarchylevel4bg = $hierarchylevel4bg;

        return $this;
    }

    /**
     * Get hierarchylevel4bg
     *
     * @return string 
     */
    public function getHierarchylevel4bg()
    {
        return $this->hierarchylevel4bg;
    }

    /**
     * Set hierarchylevel5
     *
     * @param string $hierarchylevel5
     * @return UserData
     */
    public function setHierarchylevel5($hierarchylevel5)
    {
        $this->hierarchylevel5 = $hierarchylevel5;

        return $this;
    }

    /**
     * Get hierarchylevel5
     *
     * @return string 
     */
    public function getHierarchylevel5()
    {
        return $this->hierarchylevel5;
    }

    /**
     * Set hierarchylevel5bg
     *
     * @param string $hierarchylevel5bg
     * @return UserData
     */
    public function setHierarchylevel5bg($hierarchylevel5bg)
    {
        $this->hierarchylevel5bg = $hierarchylevel5bg;

        return $this;
    }

    /**
     * Get hierarchylevel5bg
     *
     * @return string 
     */
    public function getHierarchylevel5bg()
    {
        return $this->hierarchylevel5bg;
    }

    /**
     * Set hierarchylevel6
     *
     * @param string $hierarchylevel6
     * @return UserData
     */
    public function setHierarchylevel6($hierarchylevel6)
    {
        $this->hierarchylevel6 = $hierarchylevel6;

        return $this;
    }

    /**
     * Get hierarchylevel6
     *
     * @return string 
     */
    public function getHierarchylevel6()
    {
        return $this->hierarchylevel6;
    }

    /**
     * Set hierarchylevel6bg
     *
     * @param string $hierarchylevel6bg
     * @return UserData
     */
    public function setHierarchylevel6bg($hierarchylevel6bg)
    {
        $this->hierarchylevel6bg = $hierarchylevel6bg;

        return $this;
    }

    /**
     * Get hierarchylevel6bg
     *
     * @return string 
     */
    public function getHierarchylevel6bg()
    {
        return $this->hierarchylevel6bg;
    }

    /**
     * Set hierarchylevel7
     *
     * @param string $hierarchylevel7
     * @return UserData
     */
    public function setHierarchylevel7($hierarchylevel7)
    {
        $this->hierarchylevel7 = $hierarchylevel7;

        return $this;
    }

    /**
     * Get hierarchylevel7
     *
     * @return string 
     */
    public function getHierarchylevel7()
    {
        return $this->hierarchylevel7;
    }

    /**
     * Set hierarchylevel7bg
     *
     * @param string $hierarchylevel7bg
     * @return UserData
     */
    public function setHierarchylevel7bg($hierarchylevel7bg)
    {
        $this->hierarchylevel7bg = $hierarchylevel7bg;

        return $this;
    }

    /**
     * Get hierarchylevel7bg
     *
     * @return string 
     */
    public function getHierarchylevel7bg()
    {
        return $this->hierarchylevel7bg;
    }

    /**
     * Set hierarchylevel8
     *
     * @param string $hierarchylevel8
     * @return UserData
     */
    public function setHierarchylevel8($hierarchylevel8)
    {
        $this->hierarchylevel8 = $hierarchylevel8;

        return $this;
    }

    /**
     * Get hierarchylevel8
     *
     * @return string 
     */
    public function getHierarchylevel8()
    {
        return $this->hierarchylevel8;
    }

    /**
     * Set hierarchylevel8bg
     *
     * @param string $hierarchylevel8bg
     * @return UserData
     */
    public function setHierarchylevel8bg($hierarchylevel8bg)
    {
        $this->hierarchylevel8bg = $hierarchylevel8bg;

        return $this;
    }

    /**
     * Get hierarchylevel8bg
     *
     * @return string 
     */
    public function getHierarchylevel8bg()
    {
        return $this->hierarchylevel8bg;
    }

    /**
     * Set hierarchylevel9
     *
     * @param string $hierarchylevel9
     * @return UserData
     */
    public function setHierarchylevel9($hierarchylevel9)
    {
        $this->hierarchylevel9 = $hierarchylevel9;

        return $this;
    }

    /**
     * Get hierarchylevel9
     *
     * @return string 
     */
    public function getHierarchylevel9()
    {
        return $this->hierarchylevel9;
    }

    /**
     * Set hierarchylevel9bg
     *
     * @param string $hierarchylevel9bg
     * @return UserData
     */
    public function setHierarchylevel9bg($hierarchylevel9bg)
    {
        $this->hierarchylevel9bg = $hierarchylevel9bg;

        return $this;
    }

    /**
     * Get hierarchylevel9bg
     *
     * @return string 
     */
    public function getHierarchylevel9bg()
    {
        return $this->hierarchylevel9bg;
    }

    /**
     * Set hrstatus
     *
     * @param string $hrstatus
     * @return UserData
     */
    public function setHrstatus($hrstatus)
    {
        $this->hrstatus = $hrstatus;

        return $this;
    }

    /**
     * Get hrstatus
     *
     * @return string 
     */
    public function getHrstatus()
    {
        return $this->hrstatus;
    }

    /**
     * Set jobcode
     *
     * @param string $jobcode
     * @return UserData
     */
    public function setJobcode($jobcode)
    {
        $this->jobcode = $jobcode;

        return $this;
    }

    /**
     * Get jobcode
     *
     * @return string 
     */
    public function getJobcode()
    {
        return $this->jobcode;
    }

    /**
     * Set jobtitle
     *
     * @param string $jobtitle
     * @return UserData
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    /**
     * Get jobtitle
     *
     * @return string 
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Set jobtitlecyr
     *
     * @param string $jobtitlecyr
     * @return UserData
     */
    public function setJobtitlecyr($jobtitlecyr)
    {
        $this->jobtitlecyr = $jobtitlecyr;

        return $this;
    }

    /**
     * Get jobtitlecyr
     *
     * @return string 
     */
    public function getJobtitlecyr()
    {
        return $this->jobtitlecyr;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return UserData
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set lastnamecyr
     *
     * @param string $lastnamecyr
     * @return UserData
     */
    public function setLastnamecyr($lastnamecyr)
    {
        $this->lastnamecyr = $lastnamecyr;

        return $this;
    }

    /**
     * Get lastnamecyr
     *
     * @return string 
     */
    public function getLastnamecyr()
    {
        return $this->lastnamecyr;
    }

    /**
     * Set mailnickname
     *
     * @param string $mailnickname
     * @return UserData
     */
    public function setMailnickname($mailnickname)
    {
        $this->mailnickname = $mailnickname;

        return $this;
    }

    /**
     * Get mailnickname
     *
     * @return string 
     */
    public function getMailnickname()
    {
        return $this->mailnickname;
    }

    /**
     * Set manager
     *
     * @param string $manager
     * @return UserData
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string 
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return UserData
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set middlenamecyr
     *
     * @param string $middlenamecyr
     * @return UserData
     */
    public function setMiddlenamecyr($middlenamecyr)
    {
        $this->middlenamecyr = $middlenamecyr;

        return $this;
    }

    /**
     * Get middlenamecyr
     *
     * @return string 
     */
    public function getMiddlenamecyr()
    {
        return $this->middlenamecyr;
    }

    /**
     * Set mobilephone
     *
     * @param string $mobilephone
     * @return UserData
     */
    public function setMobilephone($mobilephone)
    {
        $this->mobilephone = $mobilephone;

        return $this;
    }

    /**
     * Get mobilephone
     *
     * @return string 
     */
    public function getMobilephone()
    {
        return $this->mobilephone;
    }

    /**
     * Set officelocation
     *
     * @param string $officelocation
     * @return UserData
     */
    public function setOfficelocation($officelocation)
    {
        $this->officelocation = $officelocation;

        return $this;
    }

    /**
     * Get officelocation
     *
     * @return string 
     */
    public function getOfficelocation()
    {
        return $this->officelocation;
    }

    /**
     * Set officephone
     *
     * @param string $officephone
     * @return UserData
     */
    public function setOfficephone($officephone)
    {
        $this->officephone = $officephone;

        return $this;
    }

    /**
     * Get officephone
     *
     * @return string 
     */
    public function getOfficephone()
    {
        return $this->officephone;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return UserData
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set prassid
     *
     * @param integer $prassid
     * @return UserData
     */
    public function setPrassid($prassid)
    {
        $this->prassid = $prassid;

        return $this;
    }

    /**
     * Get prassid
     *
     * @return integer 
     */
    public function getPrassid()
    {
        return $this->prassid;
    }

    /**
     * Set prassstaid
     *
     * @param integer $prassstaid
     * @return UserData
     */
    public function setPrassstaid($prassstaid)
    {
        $this->prassstaid = $prassstaid;

        return $this;
    }

    /**
     * Get prassstaid
     *
     * @return integer 
     */
    public function getPrassstaid()
    {
        return $this->prassstaid;
    }

    /**
     * Set prperid
     *
     * @param integer $prperid
     * @return UserData
     */
    public function setPrperid($prperid)
    {
        $this->prperid = $prperid;

        return $this;
    }

    /**
     * Get prperid
     *
     * @return integer 
     */
    public function getPrperid()
    {
        return $this->prperid;
    }

    /**
     * Set shopnumber
     *
     * @param string $shopnumber
     * @return UserData
     */
    public function setShopnumber($shopnumber)
    {
        $this->shopnumber = $shopnumber;

        return $this;
    }

    /**
     * Get shopnumber
     *
     * @return string 
     */
    public function getShopnumber()
    {
        return $this->shopnumber;
    }

    /**
     * Set stjobid
     *
     * @param integer $stjobid
     * @return UserData
     */
    public function setStjobid($stjobid)
    {
        $this->stjobid = $stjobid;

        return $this;
    }

    /**
     * Get stjobid
     *
     * @return integer 
     */
    public function getStjobid()
    {
        return $this->stjobid;
    }

    /**
     * Set stposid
     *
     * @param integer $stposid
     * @return UserData
     */
    public function setStposid($stposid)
    {
        $this->stposid = $stposid;

        return $this;
    }

    /**
     * Get stposid
     *
     * @return integer 
     */
    public function getStposid()
    {
        return $this->stposid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserData
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
}
