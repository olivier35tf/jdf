<?php

namespace Jdf\HoroscopeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zodiac
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Zodiac
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amour", type="string", length=255)
     */
    private $amour;

    /**
     * @var string
     *
     * @ORM\Column(name="sante", type="string", length=255)
     */
    private $sante;

    /**
     * @var string
     *
     * @ORM\Column(name="travail", type="string", length=255)
     */
    private $travail;


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
     * Set name
     *
     * @param string $name
     * @return Zodiac
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Zodiac
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amour
     *
     * @param string $amour
     * @return Zodiac
     */
    public function setAmour($amour)
    {
        $this->amour = $amour;

        return $this;
    }

    /**
     * Get amour
     *
     * @return string 
     */
    public function getAmour()
    {
        return $this->amour;
    }

    /**
     * Set sante
     *
     * @param string $sante
     * @return Zodiac
     */
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

    /**
     * Get sante
     *
     * @return string 
     */
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set travail
     *
     * @param string $travail
     * @return Zodiac
     */
    public function setTravail($travail)
    {
        $this->travail = $travail;

        return $this;
    }

    /**
     * Get travail
     *
     * @return string 
     */
    public function getTravail()
    {
        return $this->travail;
    }
}
