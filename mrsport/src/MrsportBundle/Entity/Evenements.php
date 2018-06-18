<?php

namespace MrsportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evenements
 *
 * @ORM\Table(name="mrs_evenements")
 * @ORM\Entity(repositoryClass="MrsportBundle\Repository\evenementsRepository")
 */
class Evenements
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
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * @var time
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string")
     */
    private $adresse;


    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string")
     */
    private $ville;



    /**
     * @var description
     *
     * @ORM\Column(name="description", type="text", length= 500)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length= 10)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length= 100)
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return evenements
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time.
     *
     * @param \DateTime $time
     *
     * @return evenements
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return evenements
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return evenements
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sports.
     *
     * @param \MrsportBundle\Entity\Sports $sports
     *
     * @return evenements
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
     * Set ville.
     *
     * @param string $ville
     *
     * @return Evenements
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Evenements
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
     * Set status.
     *
     * @param string $status
     *
     * @return Evenements
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
     * @param string $telephone
     *
     * @return Evenements
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string
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
     * @return Evenements
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
