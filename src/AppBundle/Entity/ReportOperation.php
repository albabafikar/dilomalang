<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportOperation
 */
class ReportOperation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $roName;
 /**
     * @var string
     */
    private $roMonth;
     /**
     * @var string
     */
    private $roYear;
    /**
     * @var string
     */
    private $roQty;

    /**
     * @var string
     */
    private $roUnitprice;

    /**
     * @var string
     */
    private $roFile;

    /**
     * @var string
     */
    private $roStatus;

/**
     * @var date
     */
    private $roDate;
/**
     * @var string
     */
    private $roNote;

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
     * Set roName
     *
     * @param string $roName
     * @return reportoperation
     */
    public function setRoName($roName)
    {
        $this->roName = $roName;

        return $this;
    }

    /**
     * Get roName
     *
     * @return string 
     */
    public function getRoName()
    {
        return $this->roName;
    }

      /**
     * Set roMonth
     *
     * @param string $roMonth
     * @return ReportOperation
     */
    public function setRoMonth($roMonth)
    {
        $this->roMonth = $roMonth;

        return $this;
    }

    /**
     * Get roMonth
     *
     * @return string 
     */
    public function getRoMonth()
    {
        return $this->roMonth;
    }

 /**
     * Set roYear
     *
     * @param string $roYear
     * @return ReportOperation
     */
    public function setRoYear($roYear)
    {
        $this->roYear = $roYear;

        return $this;
    }

    /**
     * Get roYear
     *
     * @return string 
     */
    public function getRoYear()
    {
        return $this->roYear;
    }


    /**
     * Set roQty
     *
     * @param string $roQty
     * @return ReportOperation
     */
    public function setRoQty($roQty)
    {
        $this->roQty = $roQty;

        return $this;
    }

    /**
     * Get roQty
     *
     * @return string 
     */
    public function getRoQty()
    {
        return $this->roQty;
    }

    /**
     * Set roUnitprice
     *
     * @param string $roUnitprice
     * @return ReportOperation
     */
    public function setRoUnitprice($roUnitprice)
    {
        $this->roUnitprice = $roUnitprice;

        return $this;
    }

    /**
     * Get roUnitprice
     *
     * @return string 
     */
    public function getRoUnitprice()
    {
        return $this->roUnitprice;
    }

    /**
     * Set roFile
     *
     * @param string $roFile
     * @return ReportOperation
     */
    public function setRoFile($roFile)
    {
        $this->roFile = $roFile;

        return $this;
    }

    /**
     * Get roFile
     *
     * @return string 
     */
    public function getRoFile()
    {
        return $this->roFile;
    }

    /**
     * Set roStatus
     *
     * @param string $roStatus
     * @return ReportOperation
     */
    public function setRoStatus($roStatus)
    {
        $this->roStatus = $roStatus;

        return $this;
    }

    /**
     * Get roStatus
     *
     * @return string 
     */
    public function getRoStatus()
    {
        return $this->roStatus;
    }

     /**
     * Set roDate
     *
     * @param date $roDate
     * @return ReportOperation
     */
    public function setRoDate($roDate)
    {
        $this->roDate = new \DateTime($roDate);

        return $this;
    }

 

    /**
     * Get roDate
     *
     * @return date
     */
    public function getRoDate()
    {
        return $this->roDate;
    }

     /**
     * Set roNote
     *
     * @param string $roNote
     * @return ReportOperation
     */
    public function setRoNote($roNote)
    {
        $this->roNote = $roNote;

        return $this;
    }

    /**
     * Get roNote
     *
     * @return string 
     */
    public function getRoNote()
    {
        return $this->roNote;
    }
}
