<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 */
class Member
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $memberName;

    /**
     * @var string
     */
    private $memberActivity;

    /**
     * @var string
     */
    private $memberTotal;

    /**
     * @var int
     */
    private $memberGenre;

    /**
     * @var int
     */
    private $memberStatus;

    /**
     * @var \DateTime
     */
    private $memberDate;


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
     * Set memberName
     *
     * @param string $memberName
     * @return Member
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get memberName
     *
     * @return string 
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * Set memberActivity
     *
     * @param string $memberActivity
     * @return Member
     */
    public function setMemberActivity($memberActivity)
    {
        $this->memberActivity = $memberActivity;

        return $this;
    }

    /**
     * Get memberActivity
     *
     * @return string 
     */
    public function getMemberActivity()
    {
        return $this->memberActivity;
    }

    /**
     * Set memberTotal
     *
     * @param string $memberTotal
     * @return Member
     */
    public function setMemberTotal($memberTotal)
    {
        $this->memberTotal = $memberTotal;

        return $this;
    }

    /**
     * Get memberTotal
     *
     * @return string 
     */
    public function getMemberTotal()
    {
        return $this->memberTotal;
    }

    /**
     * Set memberGenre
     *
     * @param integer $memberGenre
     * @return Member
     */
    public function setMemberGenre($memberGenre)
    {
        $this->memberGenre = $memberGenre;

        return $this;
    }

    /**
     * Get memberGenre
     *
     * @return integer
     */
    public function getMemberGenre()
    {
        return $this->memberGenre;
    }

    /**
     * Set memberStatus
     *
     * @param integer $memberStatus
     * @return Member
     */
    public function setMemberStatus($memberStatus)
    {
        $this->memberStatus = $memberStatus;

        return $this;
    }

    /**
     * Get memberStatus
     *
     * @return integer
     */
    public function getMemberStatus()
    {
        return $this->memberStatus;
    }


    /**
     * @param $memberDate
     * @return $this
     */
    public function setMemberDate($memberDate)
    {
        $this->memberDate = new \DateTime($memberDate);

        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getMemberDate()
    {
        return $this->memberDate;
    }
}
