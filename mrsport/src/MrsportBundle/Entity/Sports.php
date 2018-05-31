<?php

namespace MrsportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sports
 *
 * @ORM\Table(name="sports")
 * @ORM\Entity(repositoryClass="MrsportBundle\Repository\sportsRepository")
 */
class sports
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
     * @ORM\Column(name="football", type="string")
     */
    private $football;


    /**
     * @var string
     *
     * @ORM\Column(name="basketball", type="string")
     */
    private $basketball;


    /**
     * @var string
     *
     * @ORM\Column(name="hockey", type="string")
     */
    private $hockey;


    /**
     * @var string
     *
     * @ORM\Column(name="rugby", type="string")
     */
    private $rugby;


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
     * Set football.
     *
     * @param string $football
     *
     * @return sports
     */
    public function setFootball($football)
    {
        $this->football = $football;

        return $this;
    }

    /**
     * Get football.
     *
     * @return string
     */
    public function getFootball()
    {
        return $this->football;
    }

    /**
     * Set basketball.
     *
     * @param string $basketball
     *
     * @return sports
     */
    public function setBasketball($basketball)
    {
        $this->basketball = $basketball;

        return $this;
    }

    /**
     * Get basketball.
     *
     * @return string
     */
    public function getBasketball()
    {
        return $this->basketball;
    }

    /**
     * Set hockey.
     *
     * @param string $hockey
     *
     * @return sports
     */
    public function setHockey($hockey)
    {
        $this->hockey = $hockey;

        return $this;
    }

    /**
     * Get hockey.
     *
     * @return string
     */
    public function getHockey()
    {
        return $this->hockey;
    }

    /**
     * Set rugby.
     *
     * @param string $rugby
     *
     * @return sports
     */
    public function setRugby($rugby)
    {
        $this->rugby = $rugby;

        return $this;
    }

    /**
     * Get rugby.
     *
     * @return string
     */
    public function getRugby()
    {
        return $this->rugby;
    }
}
