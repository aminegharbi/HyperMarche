<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Catalogue
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
     * @ORM\Column(name="lienphoto", type="string", length=255)
     */
    private $lienphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="datedebut", type="string", length=255)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="string", length=255)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="liencat", type="string", length=255)
     */
    private $liencat;

                /**
* @ORM\OneToOne(targetEntity="Hypermarchecentrale", cascade={"persist", "merge", "remove"})
* @ORM\JoinColumn(name="idhypermarche", referencedColumnName="id")
*/
    private $idhypermarche;
    
    
    function getIdhypermarche() {
        return $this->idhypermarche;
    }

    function setIdhypermarche($idhypermarche) {
        $this->idhypermarche = $idhypermarche;
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
     * Set nom
     *
     * @param string $nom
     * @return Catalogue
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
     * Set lienphoto
     *
     * @param string $lienphoto
     * @return Catalogue
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
     * Set datedebut
     *
     * @param string $datedebut
     * @return Catalogue
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return string 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param string $datefin
     * @return Catalogue
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return string 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set liencat
     *
     * @param string $liencat
     * @return Catalogue
     */
    public function setLiencat($liencat)
    {
        $this->liencat = $liencat;

        return $this;
    }

    /**
     * Get liencat
     *
     * @return string 
     */
    public function getLiencat()
    {
        return $this->liencat;
    }
}
