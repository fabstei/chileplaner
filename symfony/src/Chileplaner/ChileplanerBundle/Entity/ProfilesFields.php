<?php

namespace Chileplaner\ChileplanerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilesFields
 *
 * @ORM\Table(name="profiles_fields", indexes={@ORM\Index(name="varname", columns={"varname", "widget", "visible"})})
 * @ORM\Entity
 */
class ProfilesFields
{
    /**
     * @var string
     *
     * @ORM\Column(name="varname", type="string", length=50, nullable=false)
     */
    private $varname;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", length=50, nullable=false)
     */
    private $fieldType;

    /**
     * @var string
     *
     * @ORM\Column(name="field_size", type="string", length=15, nullable=false)
     */
    private $fieldSize;

    /**
     * @var string
     *
     * @ORM\Column(name="field_size_min", type="string", length=15, nullable=false)
     */
    private $fieldSizeMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="required", type="integer", nullable=false)
     */
    private $required;

    /**
     * @var string
     *
     * @ORM\Column(name="match", type="string", length=255, nullable=false)
     */
    private $match;

    /**
     * @var string
     *
     * @ORM\Column(name="range", type="string", length=255, nullable=false)
     */
    private $range;

    /**
     * @var string
     *
     * @ORM\Column(name="error_message", type="string", length=255, nullable=false)
     */
    private $errorMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="other_validator", type="string", length=5000, nullable=false)
     */
    private $otherValidator;

    /**
     * @var string
     *
     * @ORM\Column(name="default", type="string", length=255, nullable=false)
     */
    private $default;

    /**
     * @var string
     *
     * @ORM\Column(name="widget", type="string", length=255, nullable=false)
     */
    private $widget;

    /**
     * @var string
     *
     * @ORM\Column(name="widgetparams", type="string", length=5000, nullable=false)
     */
    private $widgetparams;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="visible", type="integer", nullable=false)
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set varname
     *
     * @param string $varname
     * @return ProfilesFields
     */
    public function setVarname($varname)
    {
        $this->varname = $varname;

        return $this;
    }

    /**
     * Get varname
     *
     * @return string 
     */
    public function getVarname()
    {
        return $this->varname;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ProfilesFields
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
     * Set fieldType
     *
     * @param string $fieldType
     * @return ProfilesFields
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set fieldSize
     *
     * @param string $fieldSize
     * @return ProfilesFields
     */
    public function setFieldSize($fieldSize)
    {
        $this->fieldSize = $fieldSize;

        return $this;
    }

    /**
     * Get fieldSize
     *
     * @return string 
     */
    public function getFieldSize()
    {
        return $this->fieldSize;
    }

    /**
     * Set fieldSizeMin
     *
     * @param string $fieldSizeMin
     * @return ProfilesFields
     */
    public function setFieldSizeMin($fieldSizeMin)
    {
        $this->fieldSizeMin = $fieldSizeMin;

        return $this;
    }

    /**
     * Get fieldSizeMin
     *
     * @return string 
     */
    public function getFieldSizeMin()
    {
        return $this->fieldSizeMin;
    }

    /**
     * Set required
     *
     * @param integer $required
     * @return ProfilesFields
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return integer 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set match
     *
     * @param string $match
     * @return ProfilesFields
     */
    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return string 
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set range
     *
     * @param string $range
     * @return ProfilesFields
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * Get range
     *
     * @return string 
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Set errorMessage
     *
     * @param string $errorMessage
     * @return ProfilesFields
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get errorMessage
     *
     * @return string 
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Set otherValidator
     *
     * @param string $otherValidator
     * @return ProfilesFields
     */
    public function setOtherValidator($otherValidator)
    {
        $this->otherValidator = $otherValidator;

        return $this;
    }

    /**
     * Get otherValidator
     *
     * @return string 
     */
    public function getOtherValidator()
    {
        return $this->otherValidator;
    }

    /**
     * Set default
     *
     * @param string $default
     * @return ProfilesFields
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return string 
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set widget
     *
     * @param string $widget
     * @return ProfilesFields
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;

        return $this;
    }

    /**
     * Get widget
     *
     * @return string 
     */
    public function getWidget()
    {
        return $this->widget;
    }

    /**
     * Set widgetparams
     *
     * @param string $widgetparams
     * @return ProfilesFields
     */
    public function setWidgetparams($widgetparams)
    {
        $this->widgetparams = $widgetparams;

        return $this;
    }

    /**
     * Get widgetparams
     *
     * @return string 
     */
    public function getWidgetparams()
    {
        return $this->widgetparams;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return ProfilesFields
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set visible
     *
     * @param integer $visible
     * @return ProfilesFields
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return integer 
     */
    public function getVisible()
    {
        return $this->visible;
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
}
