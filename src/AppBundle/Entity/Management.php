<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Management
 */
class Management
{
    /**
     * @var int
     */
    private $id;

      /**
     * @var int
     */
    private $manageMonth;

      /**
     * @var int
     */
    private $manageYear;

    /**
     * @var string
     */
    private $manageDataMember;

    /**
     * @var string
     */
    private $manageDataUser;

    /**
     * @var string
     */
    private $manageDatafb;

    /**
     * @var string
     */
    private $manageDatatwitter;

    /**
     * @var string
     */
    private $manageDataig;

    /**
     * @var string
     */
    private $manageDataStartup;

    /**
     * @var string
     */
    private $manageDataCommunity;


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
     * Set manageDatafb
     *
     * @param string $manageDatafb
     * @return Management
     */
    public function setManageDatafb($manageDatafb)
    {
        $this->manageDatafb = $manageDatafb;

        return $this;
    }

    /**
     * Get manageDatafb
     *
     * @return string 
     */
    public function getManageDatafb()
    {
        return $this->manageDatafb;
    }

    /**
     * Set manageDatatwitter
     *
     * @param string $manageDatatwitter
     * @return Management
     */
    public function setManageDatatwitter($manageDatatwitter)
    {
        $this->manageDatatwitter = $manageDatatwitter;

        return $this;
    }

    /**
     * Get manageDatatwitter
     *
     * @return string 
     */
    public function getManageDatatwitter()
    {
        return $this->manageDatatwitter;
    }

    /**
     * Set manageDataig
     *
     * @param string $manageDataig
     * @return Management
     */
    public function setManageDataig($manageDataig)
    {
        $this->manageDataig = $manageDataig;

        return $this;
    }

    /**
     * Get manageDataig
     *
     * @return string 
     */
    public function getManageDataig()
    {
        return $this->manageDataig;
    }

    /**
     * Set manageMonth
     *
     * @param integer $manageMonth
     * @return Management
     */
    public function setManageMonth($manageMonth)
    {
        $this->manageMonth = $manageMonth;

        return $this;
    }

    /**
     * Get manageMonth
     *
     * @return int 
     */
    public function getManageMonth()
    {
        return $this->manageMonth;
    }

    
    /**
     * Set manageYear
     *
     * @param integer $manageYear
     * @return Management
     */
    public function setManageYear($manageYear)
    {
        $this->manageYear = $manageYear;

        return $this;
    }

    /**
     * Get manageYear
     *
     * @return string 
     */
    public function getManageYear()
    {
        return $this->manageYear;
    }


    /**
     * Set manageDataMember
     *
     * @param string $manageDataMember
     * @return Management
     */
    public function setManageDataMember($manageDataMember)
    {
        $this->manageDataMember = $manageDataMember;

        return $this;
    }

    /**
     * Get manageDataMember
     *
     * @return string 
     */
    public function getManageDataMember()
    {
        return $this->manageDataMember;
    }

    /**
     * Set manageDataUser
     *
     * @param string $manageDataUser
     * @return Management
     */
    public function setManageDataUser($manageDataUser)
    {
        $this->manageDataUser = $manageDataUser;

        return $this;
    }

    /**
     * Get manageDataUser
     *
     * @return string 
     */
    public function getManageDataUser()
    {
        return $this->manageDataUser;
    }

    /**
     * Set manageDataStartup
     *
     * @param string $manageDataStartup
     * @return Management
     */
    public function setManageDataStartup($manageDataStartup)
    {
        $this->manageDataStartup = $manageDataStartup;

        return $this;
    }

    /**
     * Get manageDataStartup
     *
     * @return string 
     */
    public function getManageDataStartup()
    {
        return $this->manageDataStartup;
    }

/**
     * Set manageDataCommunity
     *
     * @param string $manageDataCommunity
     * @return Management
     */
    public function setManageDataCommunity($manageDataCommunity)
    {
        $this->manageDataCommunity = $manageDataCommunity;

        return $this;
    }

    /**
     * Get manageDataCommunity
     *
     * @return string 
     */
    public function getManageDataCommunity()
    {
        return $this->manageDataCommunity;
    }
}
