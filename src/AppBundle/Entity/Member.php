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
     * @var string
     */
    private $memberGenre;

    /**
     * @var string
     */
    private $memberStatus;


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
     * @param string $memberGenre
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
     * @return string 
     */
    public function getMemberGenre()
    {
        return $this->memberGenre;
    }

    /**
     * Set memberStatus
     *
     * @param string $memberStatus
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
     * @return string 
     */
    public function getMemberStatus()
    {
        return $this->memberStatus;
    }
}
