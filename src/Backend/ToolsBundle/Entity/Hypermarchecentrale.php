<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hypermarchecentrale
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hypermarchecentrale
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lienphoto1", type="string", length=255)
     */
    private $lienphoto1;


        
        /**
     * @var string
     *
     * @ORM\Column(name="phrasehyper", type="string", length=255)
     */
    private $phrasehyper;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombrevisite", type="integer")
     */
    private $nombrevisite;


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
     * Set nom
     *
     * @param string $nom
     * @return Hypermarche centrale
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Hypermarche centrale
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
     * Set lienphoto1
     *
     * @param string $lienphoto1
     * @return Hypermarche centrale
     */
    public function setLienphoto1($lienphoto1)
    {
        $this->lienphoto1 = $lienphoto1;

        return $this;
    }

    /**
     * Get lienphoto1
     *
     * @return string 
     */
    public function getLienphoto1()
    {
        return $this->lienphoto1;
    }

    /**
     * Set nombrevisite
     *
     * @param integer $nombrevisite
     * @return Hypermarche centrale
     */
    public function setNombrevisite($nombrevisite)
    {
        $this->nombrevisite = $nombrevisite;

        return $this;
    }

    /**
     * Get nombrevisite
     *
     * @return integer 
     */
    public function getNombrevisite()
    {
        return $this->nombrevisite;
    }
        function getPhrasehyper() {
        return $this->phrasehyper;
    }

    function setPhrasehyper($phrasehyper) {
        $this->phrasehyper = $phrasehyper;
    }
}
