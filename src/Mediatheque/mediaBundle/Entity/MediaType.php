<?php

namespace Mediatheque\mediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatheque\mediaBundle\Entity\MediaType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MediaType
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var datetime $duree_pret
     *
     * @ORM\Column(name="duree_pret", type="datetime")
     */
    private $duree_pret;


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
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Set duree_pret
     *
     * @param datetime $dureePret
     */
    public function setDureePret($dureePret)
    {
        $this->duree_pret = $dureePret;
    }

    /**
     * Get duree_pret
     *
     * @return datetime 
     */
    public function getDureePret()
    {
        return $this->duree_pret;
    }
    
    public function __toString()
    {
        return $this->nom;
    }
}