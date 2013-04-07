<?php

namespace Fcp\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Competition
 *
 * @ORM\Table(name="competition")
 * @ORM\Entity
 */
class Competition
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
     * @ORM\Column(name="season", type="string", length=100)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="competitionType", type="string", length=155)
     */
    private $competitionType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fromDate", type="date")
     */
    private $fromDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="toDate", type="date")
     */
    private $toDate;
    
    /**
     * @ORM\OneToMany(targetEntity="Fixture", mappedBy="competition")
     */
    protected $fixtures;
    
   /**
     * @ORM\ManyToMany(targetEntity="Club")
     * @ORM\JoinTable(name="competition_clubs",
     *      joinColumns={@ORM\JoinColumn(name="competition_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="club_id", referencedColumnName="id")}
     *      )
     **/
    protected $clubs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fixtures = new ArrayCollection();
        $this->clubs = new ArrayCollection();
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
     * Set season
     *
     * @param string $season
     * @return Competition
     */
    public function setSeason($season)
    {
        $this->season = $season;
    
        return $this;
    }

    /**
     * Get season
     *
     * @return string 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set competitionType
     *
     * @param string $competitionType
     * @return Competition
     */
    public function setCompetitionType($competitionType)
    {
        $this->competitionType = $competitionType;
    
        return $this;
    }

    /**
     * Get competitionType
     *
     * @return string 
     */
    public function getCompetitionType()
    {
        switch($this->competitionType) {
            case 'season': return 'Seizoen';
            case 'cup': return 'Beker';
            case 'other': return 'Overige';
            default: return 'Onbekend';
        }
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     * @return Competition
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;
    
        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     * @return Competition
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
    
        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Add fixtures
     *
     * @param \Fcp\SiteBundle\Entity\Fixture $fixtures
     * @return Competition
     */
    public function addFixture(\Fcp\SiteBundle\Entity\Fixture $fixtures)
    {
        $this->fixtures[] = $fixtures;
    
        return $this;
    }

    /**
     * Remove fixtures
     *
     * @param \Fcp\SiteBundle\Entity\Fixture $fixtures
     */
    public function removeFixture(\Fcp\SiteBundle\Entity\Fixture $fixtures)
    {
        $this->fixtures->removeElement($fixtures);
    }

    /**
     * Get fixtures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFixtures()
    {
        return $this->fixtures;
    }

    /**
     * Add clubs
     *
     * @param \Fcp\SiteBundle\Entity\Club $clubs
     * @return Competition
     */
    public function addClub(\Fcp\SiteBundle\Entity\Club $clubs)
    {
        $this->clubs[] = $clubs;
    
        return $this;
    }

    /**
     * Remove clubs
     *
     * @param \Fcp\SiteBundle\Entity\Club $clubs
     */
    public function removeClub(\Fcp\SiteBundle\Entity\Club $clubs)
    {
        $this->clubs->removeElement($clubs);
    }

    /**
     * Get clubs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClubs()
    {
        return $this->clubs;
    }
    
    public function __toString() {
        return $this->season;
    }
}