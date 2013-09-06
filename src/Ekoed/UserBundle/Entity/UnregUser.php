<?php

namespace Ekoed\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnregUser
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UnregUser
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
     * @ORM\Column(name="name", type="string", length=196)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $creator;


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
     * Set name
     *
     * @param string $name
     * @return UnregUser
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set creator
     *
     * @param \Ekoed\UserBundle\Entity\User $creatorId
     * @return UnregUser
     */
    public function setCreator(\Ekoed\UserBundle\Entity\User $creator = null)
    {
        $this->creator = $creator;
    
        return $this;
    }

    /**
     * Get creator
     *
     * @return \Ekoed\UserBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }
}