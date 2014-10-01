<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events", indexes={@ORM\Index(name="start", columns={"start"}), @ORM\Index(name="end", columns={"end"}), @ORM\Index(name="created_by", columns={"created_by"}), @ORM\Index(name="updated_by", columns={"updated_by"}), @ORM\Index(name="responsible_person", columns={"responsible_person"}), @ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Events
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="recur", type="string", length=100, nullable=true)
     */
    private $recur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recur_end", type="date", nullable=true)
     */
    private $recurEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="private_description", type="text", nullable=true)
     */
    private $privateDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    private $updatedOn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="preparation_time", type="integer", nullable=true)
     */
    private $preparationTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cleaning_time", type="integer", nullable=true)
     */
    private $cleaningTime;

    /**
     * @var string
     *
     * @ORM\Column(name="public_description", type="text", nullable=true)
     */
    private $publicDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     * })
     */
    private $updatedBy;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\People
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\People")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsible_person", referencedColumnName="id")
     * })
     */
    private $responsiblePerson;

    /**
     * @var \Chileplaner\ChileplanerBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * })
     */
    private $createdBy;

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
     * Set start
     *
     * @param \DateTime $start
     * @return Events
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return Events
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set recur
     *
     * @param string $recur
     * @return Events
     */
    public function setRecur($recur)
    {
        $this->recur = $recur;

        return $this;
    }

    /**
     * Get recur
     *
     * @return string 
     */
    public function getRecur()
    {
        return $this->recur;
    }

    /**
     * Set recurEnd
     *
     * @param \DateTime $recurEnd
     * @return Events
     */
    public function setRecurEnd($recurEnd)
    {
        $this->recurEnd = $recurEnd;

        return $this;
    }

    /**
     * Get recurEnd
     *
     * @return \DateTime 
     */
    public function getRecurEnd()
    {
        return $this->recurEnd;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Events
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set privateDescription
     *
     * @param string $privateDescription
     * @return Events
     */
    public function setPrivateDescription($privateDescription)
    {
        $this->privateDescription = $privateDescription;

        return $this;
    }

    /**
     * Get privateDescription
     *
     * @return string 
     */
    public function getPrivateDescription()
    {
        return $this->privateDescription;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Events
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn
     *
     * @param \DateTime $updatedOn
     * @return Events
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return \DateTime 
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Events
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set preparationTime
     *
     * @param integer $preparationTime
     * @return Events
     */
    public function setPreparationTime($preparationTime)
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    /**
     * Get preparationTime
     *
     * @return integer 
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * Set cleaningTime
     *
     * @param integer $cleaningTime
     * @return Events
     */
    public function setCleaningTime($cleaningTime)
    {
        $this->cleaningTime = $cleaningTime;

        return $this;
    }

    /**
     * Get cleaningTime
     *
     * @return integer 
     */
    public function getCleaningTime()
    {
        return $this->cleaningTime;
    }

    /**
     * Set publicDescription
     *
     * @param string $publicDescription
     * @return Events
     */
    public function setPublicDescription($publicDescription)
    {
        $this->publicDescription = $publicDescription;

        return $this;
    }

    /**
     * Get publicDescription
     *
     * @return string 
     */
    public function getPublicDescription()
    {
        return $this->publicDescription;
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
     * Set updatedBy
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Users $updatedBy
     * @return Events
     */
    public function setUpdatedBy(\Chileplaner\ChileplanerBundle\Entity\Users $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Users 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set responsiblePerson
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\People $responsiblePerson
     * @return Events
     */
    public function setResponsiblePerson(\Chileplaner\ChileplanerBundle\Entity\People $responsiblePerson = null)
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Get responsiblePerson
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\People 
     */
    public function getResponsiblePerson()
    {
        return $this->responsiblePerson;
    }

    /**
     * Set createdBy
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Users $createdBy
     * @return Events
     */
    public function setCreatedBy(\Chileplaner\ChileplanerBundle\Entity\Users $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Chileplaner\ChileplanerBundle\Entity\Users 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set category
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Categories $category
     * @return Events
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
    
    
}
