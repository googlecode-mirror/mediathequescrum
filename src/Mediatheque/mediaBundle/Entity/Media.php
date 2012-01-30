<?php

namespace Mediatheque\mediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatheque\mediaBundle\Entity\Media
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Media
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
     *
     * @ORM\ManyToOne(targetEntity="Mediatheque\mediaBundle\Entity\MediaType")
     * @ORM\JoinColumn(name="mediatype", referencedColumnName="id")
     */
    private $id_type; // est un objet type et pas un integer!!

    /**
     * @var boolean $disponible
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string $auteur
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set id_type
     *
     * @param integer $idType
     */
    public function setIdType($idType)
    {
        $this->id_type = $idType;
    }

    /**
     * Get id_type
     *
     * @return integer 
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
}