<?php

namespace Fcp\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Fixture
 *
 * @ORM\Table(name="fixture")
 * @ORM\Entity
 */
class Fixture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
      * @var integer
     * 
     * @ORM\OneToOne(targetEntity="Club")
     * @ORM\JoinColumn(name="homeTeam_id", referencedColumnName="id", nullable=false)
     */
    private $homeTeam;

    /**
     * @var integer
     * 
     * @ORM\OneToOne(targetEntity="Club")
     * @ORM\JoinColumn(name="awayTeam_id", referencedColumnName="id", nullable=false)
     */
    private $awayTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scheduledDate", type="date")
     */
    private $scheduledDate;

    /**
     * @ORM\ManyToOne(targetEntity="Competition", inversedBy="fixtures")
     * @ORM\JoinColumn(name="competition_id", referencedColumnName="id")
     */
    private $competition;

    /**
     * @var integer
     *
     * @ORM\Column(name="homeScore", type="integer", length=2, nullable=true)
     */
    private $homeScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="awayScore", type="integer", length=2, nullable=true)
     */
    private $awayScore;

    /**
     * @ORM\OneToMany(targetEntity="Goalscorer", mappedBy="fixture", cascade={"persist"})
     **/
    private $goalScorers;

    /**
     * @ORM\ManyToMany(targetEntity="Player")
     * @ORM\JoinTable(name="fixture_yellowCarded",
     *      joinColumns={@ORM\JoinColumn(name="fixture_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $yellowCarded;

    /**
     * @ORM\ManyToMany(targetEntity="Player")
     * @ORM\JoinTable(name="fixture_redCarded",
     *      joinColumns={@ORM\JoinColumn(name="fixture_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $redCarded;
    
     /**
     * @var string
     *
     * @ORM\Column(name="refereeName", type="string", length=160, nullable=true)
     */
    private $refereeName;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="reportArticle", type="text", nullable=true)
     */
    private $reportArticle;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goalScorers = new ArrayCollection();
        $this->yellowCarded = new ArrayCollection();
        $this->redCarded = new ArrayCollection();
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
     * Set location
     *
     * @param string $location
     * @return Fixture
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set scheduledDate
     *
     * @param \DateTime $scheduledDate
     * @return Fixture
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->scheduledDate = $scheduledDate;
    
        return $this;
    }

    /**
     * Get scheduledDate
     *
     * @return \DateTime 
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * Set homeScore
     *
     * @param integer $homeScore
     * @return Fixture
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;
    
        return $this;
    }

    /**
     * Get homeScore
     *
     * @return integer 
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * Set awayScore
     *
     * @param integer $awayScore
     * @return Fixture
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;
    
        return $this;
    }

    /**
     * Get awayScore
     *
     * @return integer 
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * Set refereeName
     *
     * @param string $refereeName
     * @return Fixture
     */
    public function setRefereeName($refereeName)
    {
        $this->refereeName = $refereeName;
    
        return $this;
    }

    /**
     * Get refereeName
     *
     * @return string 
     */
    public function getRefereeName()
    {
        return $this->refereeName;
    }

    /**
     * Set reportArticle
     *
     * @param string $reportArticle
     * @return Fixture
     */
    public function setReportArticle($reportArticle)
    {
        $this->reportArticle = $reportArticle;
    
        return $this;
    }

    /**
     * Get reportArticle
     *
     * @return string 
     */
    public function getReportArticle()
    {
        return $this->reportArticle;
    }

    /**
     * Set homeTeam
     *
     * @param \Fcp\SiteBundle\Entity\Club $homeTeam
     * @return Fixture
     */
    public function setHomeTeam(\Fcp\SiteBundle\Entity\Club $homeTeam)
    {
        $this->homeTeam = $homeTeam;
    
        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return \Fcp\SiteBundle\Entity\Club 
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set awayTeam
     *
     * @param \Fcp\SiteBundle\Entity\Club $awayTeam
     * @return Fixture
     */
    public function setAwayTeam(\Fcp\SiteBundle\Entity\Club $awayTeam)
    {
        $this->awayTeam = $awayTeam;
    
        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return \Fcp\SiteBundle\Entity\Club 
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * Set competition
     *
     * @param \Fcp\SiteBundle\Entity\Competition $competition
     * @return Fixture
     */
    public function setCompetition(\Fcp\SiteBundle\Entity\Competition $competition = null)
    {
        $this->competition = $competition;
    
        return $this;
    }

    /**
     * Get competition
     *
     * @return \Fcp\SiteBundle\Entity\Competition 
     */
    public function getCompetition()
    {
        return $this->competition;
    }

    /**
     * Add goalScorers
     *
     * @param \Fcp\SiteBundle\Entity\Goalscorer $goalScorers
     * @return Fixture
     */
    public function addGoalScorer(\Fcp\SiteBundle\Entity\Goalscorer $goalScorers)
    {
        $this->goalScorers[] = $goalScorers;
    
        return $this;
    }

    /**
     * Remove goalScorers
     *
     * @param \Fcp\SiteBundle\Entity\Goalscorer $goalScorers
     */
    public function removeGoalScorer(\Fcp\SiteBundle\Entity\Goalscorer $goalScorers)
    {
        $this->goalScorers->removeElement($goalScorers);
    }
    
    public function setGoalScorers(ArrayCollection \Fcp\SiteBundle\Entity\Goalscorer $goalScorers)
    {
        $this->goalScorers = $goalScorers;
    }

    /**
     * Get goalScorers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGoalScorers()
    {
        return $this->goalScorers;
    }

    /**
     * Add yellowCarded
     *
     * @param \Fcp\SiteBundle\Entity\Player $yellowCarded
     * @return Fixture
     */
    public function addYellowCarded(\Fcp\SiteBundle\Entity\Player $yellowCarded)
    {
        $this->yellowCarded[] = $yellowCarded;
    
        return $this;
    }

    /**
     * Remove yellowCarded
     *
     * @param \Fcp\SiteBundle\Entity\Player $yellowCarded
     */
    public function removeYellowCarded(\Fcp\SiteBundle\Entity\Player $yellowCarded)
    {
        $this->yellowCarded->removeElement($yellowCarded);
    }

    /**
     * Get yellowCarded
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getYellowCarded()
    {
        if(empty($this->yellowCarded)) {
            return 0;
        } else {
            return $this->yellowCarded;
        }
    }

    /**
     * Add redCarded
     *
     * @param \Fcp\SiteBundle\Entity\Player $redCarded
     * @return Fixture
     */
    public function addRedCarded(\Fcp\SiteBundle\Entity\Player $redCarded)
    {
        $this->redCarded[] = $redCarded;
    
        return $this;
    }

    /**
     * Remove redCarded
     *
     * @param \Fcp\SiteBundle\Entity\Player $redCarded
     */
    public function removeRedCarded(\Fcp\SiteBundle\Entity\Player $redCarded)
    {
        $this->redCarded->removeElement($redCarded);
    }

    /**
     * Get redCarded
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRedCarded()
    {
        return $this->redCarded;
    }
    
    public function __toString() {
        return $this->getHomeTeam() . ' - ' . $this->getAwayTeam() . '(' . $this->getScheduledDate() . ')';
    }
}