<?php

namespace Fcp\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="clubName", type="string", length=100, nullable=false, unique=true)
     */
    private $clubName;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultLocation", type="string", length=255)
     */
    private $defaultLocation;

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
     * Set clubName
     *
     * @param string $clubName
     * @return Club
     */
    public function setClubName($clubName)
    {
        $this->clubName = $clubName;
    
        return $this;
    }

    /**
     * Get clubName
     *
     * @return string 
     */
    public function getClubName()
    {
        return $this->clubName;
    }

    /**
     * Set defaultLocation
     *
     * @param string $defaultLocation
     * @return Club
     */
    public function setDefaultLocation($defaultLocation)
    {
        $this->defaultLocation = $defaultLocation;
    
        return $this;
    }

    /**
     * Get defaultLocation
     *
     * @return string 
     */
    public function getDefaultLocation()
    {
        return $this->defaultLocation;
    }
    
    public function __toString() {
        return $this->clubName;
    }
}