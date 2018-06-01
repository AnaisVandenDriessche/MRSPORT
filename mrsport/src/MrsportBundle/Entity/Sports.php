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
     * @ORM\Column(name="name", type="string")
     */
    private $name;


 

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
     * @return sports
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
}
