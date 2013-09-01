<?php

namespace Ekoed\IOUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IOU
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class IOU
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime")
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDue", type="datetime", nullable=true)
     */
    private $dateDue;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=64, nullable=true)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="units", type="string", length=32, nullable=true)
     */
    private $units;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autocalcOverride", type="boolean")
     */
    private $autocalcOverride;

    /**
     * @var References UserBundle
     *
     * @ORM\ManyToOne(targetEntity="Ekoed\UserBundle\Entity\User")
     */
    private $ower;

    /**
     * @var References UserBundle
     *
     * @ORM\ManyToOne(targetEntity="Ekoed\UserBundle\Entity\User")
     */
    private $owee;


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
     * Set description
     *
     * @param string $description
     * @return IOU
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return IOU
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    
        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateDue
     *
     * @param \DateTime $dateDue
     * @return IOU
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;
    
        return $this;
    }

    /**
     * Get dateDue
     *
     * @return \DateTime 
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return IOU
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set type
     *
     * @param array $type
     * @return IOU
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return array 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return IOU
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set autocalcOverride
     *
     * @param boolean $autocalcOverride
     * @return IOU
     */
    public function setAutocalcOverride($autocalcOverride)
    {
        $this->autocalcOverride = $autocalcOverride;
    
        return $this;
    }

    /**
     * Get autocalcOverride
     *
     * @return boolean 
     */
    public function getAutocalcOverride()
    {
        return $this->autocalcOverride;
    }

    /**
     * Set units
     *
     * @param string $units
     * @return IOU
     */
    public function setUnits($units)
    {
        $this->units = $units;
    
        return $this;
    }

    /**
     * Get units
     *
     * @return string 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set ower
     *
     * @param \Ekoed\UserBundle\Entity\User $ower
     * @return IOU
     */
    public function setOwer(\Ekoed\UserBundle\Entity\User $ower = null)
    {
        $this->ower = $ower;
    
        return $this;
    }

    /**
     * Get ower
     *
     * @return \Ekoed\UserBundle\Entity\User 
     */
    public function getOwer()
    {
        return $this->ower;
    }

    /**
     * Set owee
     *
     * @param \Ekoed\UserBundle\Entity\User $owee
     * @return IOU
     */
    public function setOwee(\Ekoed\UserBundle\Entity\User $owee = null)
    {
        $this->owee = $owee;
    
        return $this;
    }

    /**
     * Get owee
     *
     * @return \Ekoed\UserBundle\Entity\User 
     */
    public function getOwee()
    {
        return $this->owee;
    }
}