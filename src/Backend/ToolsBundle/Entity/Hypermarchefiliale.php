<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hypermarchefiliale
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hypermarchefiliale
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
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="maplongitude", type="string", length=255)
     */
    private $mapLongitude;

    /**
     * @var string
     *
     * @ORM\Column(name="maplatitude", type="string", length=255)
     */
    private $mapLatitude;

     /**
     * 
     * @ORM\ManyToOne(targetEntity="Backend\ToolsBundle\Entity\Hypermarchecentrale")
     * @ORM\JoinColumn(name="centraleid", referencedColumnName="id")
     */
    
     private $centraleid;
     
   /**
     * 
     * @ORM\ManyToOne(targetEntity="Backend\ToolsBundle\Entity\Localite")
     * @ORM\JoinColumn(name="localite", referencedColumnName="id")
     */
    private $localite;
    
 /**
     * 
     * @ORM\ManyToOne(targetEntity="Backend\ToolsBundle\Entity\region")
     * @ORM\JoinColumn(name="region", referencedColumnName="id")
     */
    private $region;
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
     * Set adresse
     *
     * @param string $adresse
     * @return Hypermarchefiliale
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mapLongitude
     *
     * @param string $mapLongitude
     * @return Hypermarchefiliale
     */
    public function setMapLongitude($mapLongitude)
    {
        $this->mapLongitude = $mapLongitude;

        return $this;
    }

    /**
     * Get mapLongitude
     *
     * @return string 
     */
    public function getMapLongitude()
    {
        return $this->mapLongitude;
    }

    /**
     * Set mapLatitude
     *
     * @param string $mapLatitude
     * @return Hypermarchefiliale
     */
    public function setMapLatitude($mapLatitude)
    {
        $this->mapLatitude = $mapLatitude;

        return $this;
    }

    /**
     * Get mapLatitude
     *
     * @return string 
     */
    public function getMapLatitude()
    {
        return $this->mapLatitude;
    }
    
        
        /**
     * Set hypermarchecentral
     *
     * @param string $hypermarchecentral
     * @return hypermarchecentral
     */
    public function setcentraleid($centraleid)
    {
        $this->centraleid = $centraleid;

        return $this;
    }

    /**
     * Get hypermarchecentral
     *
     * @return string 
     */
    public function getcentraleid()
    {
        return $this->centraleid;
    }
    function getDelegation() {
        return $this->Delegation;
    }

    function setDelegation($Delegation) {
        $this->Delegation = $Delegation;
    }
    function getLocalite() {
        return $this->localite;
    }

    function getRegion() {
        return $this->region;
    }

    function setLocalite($localite) {
        $this->localite = $localite;
    }

    function setRegion($region) {
        $this->region = $region;
    }



}
