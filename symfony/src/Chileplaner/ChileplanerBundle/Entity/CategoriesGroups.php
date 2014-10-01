<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesGroups
 *
 * @ORM\Table(name="categories_groups", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class CategoriesGroups
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
     * @var \Chileplaner\ChileplanerBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Chileplaner\ChileplanerBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

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
     * @return CategoriesGroups
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
     * Set group
     *
     * @param \Chileplaner\ChileplanerBundle\Entity\Groups $group
     * @return CategoriesGroups
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
