<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Localite
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
     * @ORM\Column(name="codepostal", type="string", length=255)
     */
    private $codepostal;

                 /**
* @ORM\ManyToOne(targetEntity="Backend\ToolsBundle\Entity\region")
* @ORM\JoinColumn(name="regionid", referencedColumnName="id")
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
     * Set nom
     *
     * @param string $nom
     * @return Delegation
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

    function getDelegation() {
        return $this->delegation;
    }

    function setDelegation($delegation) {
        $this->delegation = $delegation;
    }

    function getCodepostal() {
        return $this->codepostal;
    }

    function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }
    public function __toString() {
        return $this->getNom();
    }



}
