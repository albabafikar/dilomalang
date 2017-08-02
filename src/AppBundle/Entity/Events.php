<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 */
class Events
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $eventName;

    /**
     * @var \DateTime
     */
    private $eventDate;

    /**
     * @var string
     */
    private $eventTopic;

    /**
     * @var string
     */
    private $eventMentor;

    /**
     * @var string
     */
    private $eventMentorjob;

    /**
     * @var \DateTime
     */
    private $eventTime;

    /**
     * @var string
     */
    private $eventParticipant;

    /**
     * @var string
     */
    private $eventPrice;

    /**
     * @var string
     */
    private $eventDetail;

    /**
     * @var string
     */
    private $eventPhoto;


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
     * Set eventName
     *
     * @param string $eventName
     * @return Events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return Events
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = new \DateTime($eventDate);

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventTopic
     *
     * @param string $eventTopic
     * @return Events
     */
    public function setEventTopic($eventTopic)
    {
        $this->eventTopic = $eventTopic;

        return $this;
    }

    /**
     * Get eventTopic
     *
     * @return string 
     */
    public function getEventTopic()
    {
        return $this->eventTopic;
    }

    /**
     * Set eventMentor
     *
     * @param string $eventMentor
     * @return Events
     */
    public function setEventMentor($eventMentor)
    {
        $this->eventMentor = $eventMentor;

        return $this;
    }

    /**
     * Get eventMentor
     *
     * @return string 
     */
    public function getEventMentor()
    {
        return $this->eventMentor;
    }

    /**
     * Set eventMentorjob
     *
     * @param string $eventMentorjob
     * @return Events
     */
    public function setEventMentorjob($eventMentorjob)
    {
        $this->eventMentorjob = $eventMentorjob;

        return $this;
    }

    /**
     * Get eventMentorjob
     *
     * @return string 
     */
    public function getEventMentorjob()
    {
        return $this->eventMentorjob;
    }

    /**
     * Set eventTime
     *
     * @param \DateTime $eventTime
     * @return Events
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = new \DateTime($eventTime);

        return $this;
    }

    /**
     * Get eventTime
     *
     * @return \DateTime 
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set eventParticipant
     *
     * @param string $eventParticipant
     * @return Events
     */
    public function setEventParticipant($eventParticipant)
    {
        $this->eventParticipant = $eventParticipant;

        return $this;
    }

    /**
     * Get eventParticipant
     *
     * @return string 
     */
    public function getEventParticipant()
    {
        return $this->eventParticipant;
    }

    /**
     * Set eventPrice
     *
     * @param string $eventPrice
     * @return Events
     */
    public function setEventPrice($eventPrice)
    {
        $this->eventPrice = $eventPrice;

        return $this;
    }

    /**
     * Get eventPrice
     *
     * @return string 
     */
    public function getEventPrice()
    {
        return $this->eventPrice;
    }

    /**
     * Set eventDetail
     *
     * @param string $eventDetail
     * @return Events
     */
    public function setEventDetail($eventDetail)
    {
        $this->eventDetail = $eventDetail;

        return $this;
    }

    /**
     * Get eventDetail
     *
     * @return string 
     */
    public function getEventDetail()
    {
        return $this->eventDetail;
    }

    /**
     * Set eventPhoto
     *
     * @param string $eventPhoto
     * @return Events
     */
    public function setEventPhoto($eventPhoto)
    {
        $this->eventPhoto = $eventPhoto;

        return $this;
    }

    /**
     * Get eventPhoto
     *
     * @return string 
     */
    public function getEventPhoto()
    {
        return $this->eventPhoto;
    }
}
