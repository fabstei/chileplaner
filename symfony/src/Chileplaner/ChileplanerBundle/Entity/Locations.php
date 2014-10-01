<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations", indexes={@ORM\Index(name="responsible_person", columns={"responsible_person"}), @ORM\Index(name="group", columns={"location_group"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class Locations
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var float
     *
     * @ORM\Column(name="x_coord", type="float", precision=10, scale=0, nullable=true)
     */
    private $xCoord;

    /**
     * @var float
     *
     * @ORM\Column(name="y_coord", type="float", precision=10, scale=0, nullable=true)
     */
    private $yCoord;

    /**
     * @var string
     *
     * @ORM\Column(name="location_group", type="string", length=50, nullable=true)
     */
    private $locationGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="descripiton", type="text", nullable=true)
     */
    private $descripiton;

    /**
     * @var string
     *
     * @ORM\Column(name="directions", type="text", nullable=true)
     */
    private $directions;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Chileplaner\ChileplanerBundle\Entity\Groups
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;



    /**
     * Set name
     *
     * @param string $name
     * @return Locations
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Locations
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Locations
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Locations
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set xCoord
     *
     * @param float $xCoord
     * @return Locations
     */
    public function setXCoord($xCoord)
    {
        $this->xCoord = $xCoord;

        return $this;
    }

    /**
     * Get xCoord
     *
     * @return float 
     */
    public function getXCoord()
    {
        return $this->xCoord;
    }

    /**
     * Set yCoord
     *
     * @param float $yCoord
     * @return Locations
     */
    public function setYCoord($yCoord)
    {
        $this->yCoord = $yCoord;

        return $this;
    }

    /**
     * Get yCoord
     *
     * @return float 
     */
    public function getYCoord()
    {
        return $this->yCoord;
    }

    /**
     * Set locationGroup
     *
     * @param string $locationGroup
     * @return Locations
     */
    public function setLocationGroup($locationGroup)
    {
        $this->locationGroup = $locationGroup;

        return $this;
    }

    /**
     * Get locationGroup
     *
     * @return string 
     */
    public function getLocationGroup()
    {
        return $this->locationGroup;
    }

    /**
     * Set descripiton
     *
     * @param string $descripiton
     * @return Locations
     */
    public function setDescripiton($descripiton)
    {
        $this->descripiton = $descripiton;

        return $this;
    }

    /**
     * Get descripiton
     *
     * @return string 
     */
    public function getDescripiton()
    {
        return $this->descripiton;
    }

    /**
     * Set directions
     *
     * @param string $directions
     * @return Locations
     */
    public function setDirections($directions)
    {
        $this->directions = $directions;

        return $this;
    }

    /**
     * Get directions
     *
     * @return string 
     */
    public function getDirections()
    {
        return $this->directions;
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
     * Set responsiblePerson
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\People $responsiblePerson
     * @return Locations
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
     * Set group
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Groups $group
     * @return Locations
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
}
