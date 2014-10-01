<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventsPeople
 *
 * @ORM\Table(name="events_people", indexes={@ORM\Index(name="event_id", columns={"event_id"}), @ORM\Index(name="person_id", columns={"person_id"})})
 * @ORM\Entity
 */
class EventsPeople
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Chileplaner\ChileplanerBundle\Entity\People
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\People")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     * })
     */
    private $person;



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
     * Set event
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Events $event
     * @return EventsPeople
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

    /**
     * Set person
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\People $person
     * @return EventsPeople
     */
    public function setPerson(\Chileplaner\ChileplanerBundle\Entity\People $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\People 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
