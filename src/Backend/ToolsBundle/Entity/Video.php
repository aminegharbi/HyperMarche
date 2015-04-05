<?php

namespace Backend\ToolsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Video
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
     * @ORM\Column(name="lienvideo", type="string", length=255)
     */
    private $lienvideo;

            /**
* @ORM\OneToOne(targetEntity="Hypermarchecentrale", cascade={"persist", "merge", "remove"})
* @ORM\JoinColumn(name="idhyp", referencedColumnName="id")
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
     * @return Video
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
     * Set lienvideo
     *
     * @param string $lienvideo
     * @return Video
     */
    public function setLienvideo($lienvideo)
    {
        $this->lienvideo = $lienvideo;

        return $this;
    }

    /**
     * Get lienvideo
     *
     * @return string 
     */
    public function getLienvideo()
    {
        return $this->lienvideo;
    }
    
}
