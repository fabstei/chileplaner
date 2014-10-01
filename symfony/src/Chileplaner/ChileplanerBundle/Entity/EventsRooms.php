<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventsRooms
 *
 * @ORM\Table(name="events_rooms", indexes={@ORM\Index(name="event_id", columns={"event_id"}), @ORM\Index(name="room_id", columns={"room_id"})})
 * @ORM\Entity
 */
class EventsRooms
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="reserved", type="boolean", nullable=false)
     */
    private $reserved;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\Rooms
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Rooms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     * })
     */
    private $room;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\Events
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     * })
     */
    private $event;



    /**
     * Set reserved
     *
     * @param boolean $reserved
     * @return EventsRooms
     */
    public function setReserved($reserved)
    {
        $this->reserved = $reserved;

        return $this;
    }

    /**
     * Get reserved
     *
     * @return boolean 
     */
    public function getReserved()
    {
        return $this->reserved;
    }

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
     * Set room
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Rooms $room
     * @return EventsRooms
     */
    public function setRoom(\Chileplaner\ChileplanerBundle\Entity\Rooms $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Rooms 
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set event
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Events $event
     * @return EventsRooms
     */
    public function setEvent(\Chileplaner\ChileplanerBundle\Entity\Events $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Events 
     */
    public function getEvent()
    {
        return $this->event;
    }
}
