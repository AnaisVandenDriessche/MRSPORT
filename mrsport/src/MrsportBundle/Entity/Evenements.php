<?php

namespace MrsportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evenements
 *
 * @ORM\Table(name="evenements")
 * @ORM\Entity(repositoryClass="MrsportBundle\Repository\evenementsRepository")
 */
class evenements
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
     * @var description
     *
     * @ORM\Column(name="description", type="text", length= 500)
     */
    private $description;


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
}
