<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delegation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Delegation
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
* @ORM\OneToOne(targetEntity="region", cascade={"persist", "merge", "remove"})
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
    function getRegion() {
        return $this->region;
    }

    function setRegion($region) {
        $this->region = $region;
    }


}
