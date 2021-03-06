<?php

namespace Ekoed\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserGroup
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
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $groupCreator;


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
     * @return UserGroup
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
     * Set groupCreator
     *
     * @param \Ekoed\UserBundle\Entity\User $groupCreator
     * @return UserGroup
     */
    public function setGroupCreator(\Ekoed\UserBundle\Entity\User $groupCreator = null)
    {
        $this->groupCreator = $groupCreator;
    
        return $this;
    }

    /**
     * Get groupCreator
     *
     * @return \Ekoed\UserBundle\Entity\User 
     */
    public function getGroupCreator()
    {
        return $this->groupCreator;
    }
}