<?php

namespace MrsportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * club
 *
 * @ORM\Table(name="mrs_club")
 * @ORM\Entity(repositoryClass="MrsportBundle\Repository\clubRepository")
 */
class Club
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
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50,nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length= 100,nullable=true)
     */
    private $email;


    /**
     * @var status
     *
     * @ORM\Column(name="status", columnDefinition="ENUM('valide','invalide','new')")
     */
    private $status;


    /**
     * @ORM\ManyToOne(targetEntity="MrsportBundle\Entity\Sports")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sports;

    
    public function __construct()
    {

        //$this->sports = new ArrayCollection();
    }

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
    public function setFondation($fondation)
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

    /**
     * Set sports.
     *
     * @param \MrsportBundle\Entity\Sports $sports
     *
     * @return club
     */
    public function setSports(\MrsportBundle\Entity\Sports $sports)
    {
        $this->sports = $sports;

        return $this;
    }

    /**
     * Get sports.
     *
     * @return \MrsportBundle\Entity\Sports
     */
    public function getSports()
    {
        return $this->sports;
    }

    

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Club
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set telephone.
     *
     * @param integer $telephone
     *
     * @return Club
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Club
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
