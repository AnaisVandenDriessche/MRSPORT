<?php

namespace MrsportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="MrsportBundle\Repository\clubRepository")
 */
class club
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="president", type="string")
     */
    private $president;


    /**
     * @var string
     *
     * @ORM\Column(name="entraineur", type="string")
     */
    private $entraineur;



    /**
     * @var string
     *
     * @ORM\Column(name="fondation", type="date")
     */
    private $fondation;



    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string")
     */
    private $couleur;


    /**
     * @var string
     *
     * @ORM\Column(name="stade", type="string")
     */
    private $stade;



    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string")
     */
    private $siteweb;

    
    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set name.
     *
     * @param string $name
     *
     * @return club
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set president.
     *
     * @param string $president
     *
     * @return club
     */
    public function setPresident($president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president.
     *
     * @return string
     */
    public function getPresident()
    {
        return $this->president;
    }

    /**
     * Set entraineur.
     *
     * @param string $entraineur
     *
     * @return club
     */
    public function setEntraineur($entraineur)
    {
        $this->entraineur = $entraineur;

        return $this;
    }

    /**
     * Get entraineur.
     *
     * @return string
     */
    public function getEntraineur()
    {
        return $this->entraineur;
    }

    /**
     * Set fondation.
     *
     * @param \year $fondation
     *
     * @return club
     */
    public function setFondation(\year $fondation)
    {
        $this->fondation = $fondation;

        return $this;
    }

    /**
     * Get fondation.
     *
     * @return \year
     */
    public function getFondation()
    {
        return $this->fondation;
    }

    /**
     * Set couleur.
     *
     * @param string $couleur
     *
     * @return club
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur.
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set stade.
     *
     * @param string $stade
     *
     * @return club
     */
    public function setStade($stade)
    {
        $this->stade = $stade;

        return $this;
    }

    /**
     * Get stade.
     *
     * @return string
     */
    public function getStade()
    {
        return $this->stade;
    }

    /**
     * Set siteweb.
     *
     * @param string $siteweb
     *
     * @return club
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb.
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }
}
