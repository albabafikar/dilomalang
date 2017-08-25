<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 */
class Report
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $reportDate;

    /**
     * @var string
     */
    private $reportTime;

    /**
     * @var string
     */
    private $reportMember;

    /**
     * @var string
     */
    private $reportTopic;

    /**
     * @var string
     */
    private $reportMentor;

    /**
     * @var string
     */
    private $reportDetail;

    /**
     * @var string
     */
    private $reportCategory;

    /**
     * @var string
     */
    private $reportTitle;

    /**
     * @var string
     */
    private $reportPhoto;
    
    /**
     * @var string
     */
    private $reportAbsen;


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
     * Set reportDate
     *
     * @param \DateTime $reportDate
     * @return Report
     */
    public function setReportDate($reportDate)
    {
        $this->reportDate = new \DateTime($reportDate);

        return $this;
    }

    /**
     * Get reportDate
     *
     * @return \DateTime 
     */
    public function getReportDate()
    {
        return $this->reportDate;
    }

    /**
     * Set reportTime
     *
     * @param string $reportTime
     * @return Report
     */
    public function setReportTime($reportTime)
    {
        $this->reportTime = $reportTime;

        return $this;
    }

    /**
     * Get reportTime
     *
     * @return string 
     */
    public function getReportTime()
    {
        return $this->reportTime;
    }

    /**
     * Set reportMember
     *
     * @param string $reportMember
     * @return Report
     */
    public function setReportMember($reportMember)
    {
        $this->reportMember = $reportMember;

        return $this;
    }

    /**
     * Get reportMember
     *
     * @return string 
     */
    public function getReportMember()
    {
        return $this->reportMember;
    }

    /**
     * Set reportTopic
     *
     * @param string $reportTopic
     * @return Report
     */
    public function setReportTopic($reportTopic)
    {
        $this->reportTopic = $reportTopic;

        return $this;
    }

    /**
     * Get reportTopic
     *
     * @return string 
     */
    public function getReportTopic()
    {
        return $this->reportTopic;
    }

    /**
     * Set reportMentor
     *
     * @param string $reportMentor
     * @return Report
     */
    public function setReportMentor($reportMentor)
    {
        $this->reportMentor = $reportMentor;

        return $this;
    }

    /**
     * Get reportMentor
     *
     * @return string 
     */
    public function getReportMentor()
    {
        return $this->reportMentor;
    }

    /**
     * Set reportDetail
     *
     * @param string $reportDetail
     * @return Report
     */
    public function setReportDetail($reportDetail)
    {
        $this->reportDetail = $reportDetail;

        return $this;
    }

    /**
     * Get reportDetail
     *
     * @return string 
     */
    public function getReportDetail()
    {
        return $this->reportDetail;
    }

    /**
     * Set reportCategory
     *
     * @param string $reportCategory
     * @return Report
     */
    public function setReportCategory($reportCategory)
    {
        $this->reportCategory = $reportCategory;

        return $this;
    }

    /**
     * Get reportCategory
     *
     * @return string 
     */
    public function getReportCategory()
    {
        return $this->reportCategory;
    }

    /**
     * Set reportTitle
     *
     * @param string $reportTitle
     * @return Report
     */
    public function setReportTitle($reportTitle)
    {
        $this->reportTitle = $reportTitle;

        return $this;
    }

    /**
     * Get reportTitle
     *
     * @return string 
     */
    public function getReportTitle()
    {
        return $this->reportTitle;
    }

     /**
     * Set reportTitle
     *
     * @param string $reportPhoto
     * @return Report
     */
    public function setReportPhoto($reportPhoto)
    {
        $this->reportPhoto = $reportPhoto;

        return $this;
    }

    /**
     * Get reportTitle
     *
     * @return string 
     */
    public function getReportPhoto()
    {
        return $this->reportPhoto;
    }

     /**
     * Set reportAbsen
     *
     * @param string $reportAbsen
     * @return Report
     */
    public function setReportAbsen($reportAbsen)
    {
        $this->reportAbsen = $reportAbsen;

        return $this;
    }

    /**
     * Get reportAbsen
     *
     * @return string 
     */
    public function getReportAbsen()
    {
        return $this->reportAbsen;
    }
}
