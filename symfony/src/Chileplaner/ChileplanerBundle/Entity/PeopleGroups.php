<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeopleGroups
 *
 * @ORM\Table(name="people_groups", indexes={@ORM\Index(name="person_id", columns={"person_id"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class PeopleGroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="function", type="string", length=100, nullable=true)
     */
    private $function;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_add_people", type="boolean", nullable=false)
     */
    private $canAddPeople;

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_remove_people", type="boolean", nullable=false)
     */
    private $canRemovePeople;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\Groups
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

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
     * Set function
     *
     * @param string $function
     * @return PeopleGroups
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string 
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set canAddPeople
     *
     * @param boolean $canAddPeople
     * @return PeopleGroups
     */
    public function setCanAddPeople($canAddPeople)
    {
        $this->canAddPeople = $canAddPeople;

        return $this;
    }

    /**
     * Get canAddPeople
     *
     * @return boolean 
     */
    public function getCanAddPeople()
    {
        return $this->canAddPeople;
    }

    /**
     * Set canRemovePeople
     *
     * @param boolean $canRemovePeople
     * @return PeopleGroups
     */
    public function setCanRemovePeople($canRemovePeople)
    {
        $this->canRemovePeople = $canRemovePeople;

        return $this;
    }

    /**
     * Get canRemovePeople
     *
     * @return boolean 
     */
    public function getCanRemovePeople()
    {
        return $this->canRemovePeople;
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
     * Set group
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Groups $group
     * @return PeopleGroups
     */
    public function setGroup(\Chileplaner\ChileplanerBundle\Entity\Groups $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set person
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\People $person
     * @return PeopleGroups
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
