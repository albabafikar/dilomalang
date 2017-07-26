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
    private $manageDataregister;


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
     * Set manageDataregister
     *
     * @param string $manageDataregister
     * @return Management
     */
    public function setManageDataregister($manageDataregister)
    {
        $this->manageDataregister = $manageDataregister;

        return $this;
    }

    /**
     * Get manageDataregister
     *
     * @return string 
     */
    public function getManageDataregister()
    {
        return $this->manageDataregister;
    }
}
