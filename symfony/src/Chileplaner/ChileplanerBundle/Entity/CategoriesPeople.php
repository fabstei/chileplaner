<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesPeople
 *
 * @ORM\Table(name="categories_people", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="person_id", columns={"person_id"})})
 * @ORM\Entity
 */
class CategoriesPeople
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="can_crud_events", type="boolean", nullable=false)
     */
    private $canCrudEvents;

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
     * @var \Chileplaner\ChileplanerBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

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
     * Set canCrudEvents
     *
     * @param boolean $canCrudEvents
     * @return CategoriesPeople
     */
    public function setCanCrudEvents($canCrudEvents)
    {
        $this->canCrudEvents = $canCrudEvents;

        return $this;
    }

    /**
     * Get canCrudEvents
     *
     * @return boolean 
     */
    public function getCanCrudEvents()
    {
        return $this->canCrudEvents;
    }

    /**
     * Set canAddPeople
     *
     * @param boolean $canAddPeople
     * @return CategoriesPeople
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
     * @return CategoriesPeople
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
     * Set category
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Categories $category
     * @return CategoriesPeople
     */
    public function setCategory(\Chileplaner\ChileplanerBundle\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set person
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\People $person
     * @return CategoriesPeople
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
