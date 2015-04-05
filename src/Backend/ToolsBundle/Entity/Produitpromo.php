<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitpromo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Produitpromo
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
     * @ORM\Column(name="datedebut", type="string", length=255)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="string", length=255)
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="ancienprix", type="float")
     */
    private $ancienPrix;

    /**
     * @var float
     *
     * @ORM\Column(name="nouveauprix", type="float")
     */
    private $nouveauPrix;

    /**
     * @var string
     *
     * @ORM\Column(name="lienphoto", type="string", length=255)
     */
    private $lienphoto;

    /**
* @ORM\OneToOne(targetEntity="Hypermarchecentrale", cascade={"persist", "merge", "remove"})
* @ORM\JoinColumn(name="idhypermarche", referencedColumnName="id")
*/
    private $idhypermarche;

        /**
* @ORM\OneToOne(targetEntity="Typeproduit", cascade={"persist", "merge", "remove"})
* @ORM\JoinColumn(name="idtypeproduit", referencedColumnName="id")
*/
    private $idtypeproduit;
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
     * @return Produitpromo
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
     * Set dateDebut
     *
     * @param string $dateDebut
     * @return Produitpromo
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     * @return Produitpromo
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set ancienPrix
     *
     * @param float $ancienPrix
     * @return Produitpromo
     */
    public function setAncienPrix($ancienPrix)
    {
        $this->ancienPrix = $ancienPrix;

        return $this;
    }

    /**
     * Get ancienPrix
     *
     * @return float 
     */
    public function getAncienPrix()
    {
        return $this->ancienPrix;
    }

    /**
     * Set nouveauPrix
     *
     * @param float $nouveauPrix
     * @return Produitpromo
     */
    public function setNouveauPrix($nouveauPrix)
    {
        $this->nouveauPrix = $nouveauPrix;

        return $this;
    }

    /**
     * Get nouveauPrix
     *
     * @return float 
     */
    public function getNouveauPrix()
    {
        return $this->nouveauPrix;
    }

    /**
     * Set lienphoto
     *
     * @param string $lienphoto
     * @return Produitpromo
     */
    public function setLienphoto($lienphoto)
    {
        $this->lienphoto = $lienphoto;

        return $this;
    }

    /**
     * Get lienphoto
     *
     * @return string 
     */
    public function getLienphoto()
    {
        return $this->lienphoto;
    }
    
    
           /**
     * Set hypermarchecentral
     *
     * @param string $idhypermarche
     * @return hypermarchecentral
     */
    public function setidhypermarche($idhypermarche)
    {
        $this->idhypermarche = $idhypermarche;

        return $this;
    }

    /**
     * Get idhypermarche
     *
     * @return string 
     */
    public function getidhypermarche()
    {
        return $this->idhypermarche;
    }
    
    
    
        
           /**
     * Set Typeproduit
     *
     * @param string $idtypeproduit
     * @return Typeproduit
     */
    public function setTypeproduit($idtypeproduit)
    {
        $this->idtypeproduit = $idtypeproduit;

        return $this;
    }

    /**
     * Get idtypeproduit
     *
     * @return string 
     */
    public function getidtypeproduit()
    {
        return $this->idtypeproduit;
    }
}
