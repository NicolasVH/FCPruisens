<?php

namespace Fcp\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goalscorers
 *
 * @ORM\Table(name="goalscorer")
 * @ORM\Entity
 */
class Goalscorer
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
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     **/
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity="Fixture", inversedBy="goalScorers")
     * @ORM\JoinColumn(name="fixture_id", referencedColumnName="id")
     **/
    private $fixture;

    /**
     * @var integer
     *
     * @ORM\Column(name="amountScored", type="integer")
     */
    private $amountScored;

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
     * Set amountScored
     *
     * @param integer $amountScored
     * @return Goalscorer
     */
    public function setAmountScored($amountScored)
    {
        $this->amountScored = $amountScored;
    
        return $this;
    }

    /**
     * Get amountScored
     *
     * @return integer 
     */
    public function getAmountScored()
    {
        if(empty($this->amountScored)) {
            return 0;
        } else {
            return $this->amountScored;
        }
    }

    /**
     * Set player
     *
     * @param \Fcp\SiteBundle\Entity\Player $player
     * @return Goalscorer
     */
    public function setPlayer(\Fcp\SiteBundle\Entity\Player $player = null)
    {
        $this->player = $player;
    
        return $this;
    }

    /**
     * Get player
     *
     * @return \Fcp\SiteBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set fixture
     *
     * @param \Fcp\SiteBundle\Entity\Fixture $fixture
     * @return Goalscorer
     */
    public function setFixture(\Fcp\SiteBundle\Entity\Fixture $fixture = null)
    {
        $this->fixture = $fixture;
    
        return $this;
    }

    /**
     * Get fixture
     *
     * @return \Fcp\SiteBundle\Entity\Fixture 
     */
    public function getFixture()
    {
        return $this->fixture;
    }
    
    public function __toString() {
        return $this->getPlayer() . ': ' . $this->getAmountScored();
    }
    
}