<?php

namespace PowersmashIOS\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $memId;

    /**
     * @var integer
     */
    private $courtId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time;


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
     * Set memId
     *
     * @param integer $memId
     * @return Reservation
     */
    public function setMemId($memId)
    {
        $this->memId = $memId;

        return $this;
    }

    /**
     * Get memId
     *
     * @return integer 
     */
    public function getMemId()
    {
        return $this->memId;
    }

    /**
     * Set courtId
     *
     * @param integer $courtId
     * @return Reservation
     */
    public function setCourtId($courtId)
    {
        $this->courtId = $courtId;

        return $this;
    }

    /**
     * Get courtId
     *
     * @return integer 
     */
    public function getCourtId()
    {
        return $this->courtId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Reservation
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
}
