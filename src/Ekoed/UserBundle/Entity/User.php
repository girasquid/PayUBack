<?php

namespace Ekoed\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string Name
     *
     * @ORM\Column(name="name", type="string", length=196)
     */
    protected $name;

    /**
     * @var References UserGroups
     *
     * @ORM\ManyToMany(targetEntity="UserGroup")
     */
    protected $userGroups;

    /**
     * @var string Time Zone
     *
     * @ORM\Column(name="timezone", type="string", length=64)
     */
    protected $timezone;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="myConnections")
     * @ORM\JoinTable(name="connections",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="connection_user_id", referencedColumnName="id")}
     *      )
     */
    protected $connectionsWithMe;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="connectionsWithMe")
     * @ORM\JoinTable(name="connections",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="connection_user_id", referencedColumnName="id")}
     *      )
     */
    protected $myConnections;

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
     * @return User
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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->userGroups = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add userGroups
     *
     * @param \Ekoed\UserBundle\Entity\UserGroup $userGroups
     * @return User
     */
    public function addUserGroup(\Ekoed\UserBundle\Entity\UserGroup $userGroups)
    {
        $this->userGroups[] = $userGroups;
    
        return $this;
    }

    /**
     * Remove userGroups
     *
     * @param \Ekoed\UserBundle\Entity\UserGroup $userGroups
     */
    public function removeUserGroup(\Ekoed\UserBundle\Entity\UserGroup $userGroups)
    {
        $this->userGroups->removeElement($userGroups);
    }

    /**
     * Get userGroups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserGroups()
    {
        return $this->userGroups;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return User
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Add connectionsWithMe
     *
     * @param \Ekoed\UserBundle\Entity\User $connectionsWithMe
     * @return User
     */
    public function addConnectionsWithMe(\Ekoed\UserBundle\Entity\User $connectionsWithMe)
    {
        $this->connectionsWithMe[] = $connectionsWithMe;
    
        return $this;
    }

    /**
     * Remove connectionsWithMe
     *
     * @param \Ekoed\UserBundle\Entity\User $connectionsWithMe
     */
    public function removeConnectionsWithMe(\Ekoed\UserBundle\Entity\User $connectionsWithMe)
    {
        $this->connectionsWithMe->removeElement($connectionsWithMe);
    }

    /**
     * Get connectionsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConnectionsWithMe()
    {
        return $this->connectionsWithMe;
    }

    /**
     * Add myConnections
     *
     * @param \Ekoed\UserBundle\Entity\User $myConnections
     * @return User
     */
    public function addMyConnection(\Ekoed\UserBundle\Entity\User $myConnections)
    {
        $this->myConnections[] = $myConnections;
    
        return $this;
    }

    /**
     * Remove myConnections
     *
     * @param \Ekoed\UserBundle\Entity\User $myConnections
     */
    public function removeMyConnection(\Ekoed\UserBundle\Entity\User $myConnections)
    {
        $this->myConnections->removeElement($myConnections);
    }

    /**
     * Get myConnections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMyConnections()
    {
        return $this->myConnections;
    }
}