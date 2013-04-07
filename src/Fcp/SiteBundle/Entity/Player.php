<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Player
 *
 * @author Nicolas Van Hoorde
 */

namespace Fcp\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class Player {
    
  /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $firstName;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=false)
    */
    protected $lastName;
    
     /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $birthday;
    
    /**
    * @ORM\Column(type="string", length=500, nullable=true)
    */
    protected $bioDescription;
    
    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    protected $preferredNumber;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    protected $preferredPosition;
    
    /**
    * @ORM\Column(type="string", length=255, nullable=true)
    */
    protected $image;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    protected $boardFunction;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true, unique=true)
    */
    protected $slug;

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
     * Set firstName
     *
     * @param string $firstName
     * @return Player
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Player
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Player
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set bioDescription
     *
     * @param string $bioDescription
     * @return Player
     */
    public function setBioDescription($bioDescription)
    {
        $this->bioDescription = $bioDescription;
    
        return $this;
    }

    /**
     * Get bioDescription
     *
     * @return string 
     */
    public function getBioDescription()
    {
        return $this->bioDescription;
    }

    /**
     * Set preferredNumber
     *
     * @param integer $preferredNumber
     * @return Player
     */
    public function setPreferredNumber($preferredNumber)
    {
        $this->preferredNumber = $preferredNumber;
    
        return $this;
    }

    /**
     * Get preferredNumber
     *
     * @return integer 
     */
    public function getPreferredNumber()
    {
        return $this->preferredNumber;
    }

    /**
     * Set preferredPosition
     *
     * @param string $preferredPosition
     * @return Player
     */
    public function setPreferredPosition($preferredPosition)
    {
        $this->preferredPosition = $preferredPosition;
    
        return $this;
    }

    /**
     * Get preferredPosition
     *
     * @return string 
     */
    public function getPreferredPosition()
    {
        return $this->preferredPosition;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set boardFunction
     *
     * @param string $boardFunction
     * @return Player
     */
    public function setBoardFunction($boardFunction)
    {
        $this->boardFunction = $boardFunction;
    
        return $this;
    }

    /**
     * Get boardFunction
     *
     * @return string 
     */
    public function getBoardFunction()
    {
        return $this->boardFunction;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Player
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function __toString() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
    
    public function getAbsolutePath()
    {
        return null === $this->image
            ? null
            : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image
            ? null
            : $this->getUploadDir().'/'.$this->image;
    }

    public function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }
}