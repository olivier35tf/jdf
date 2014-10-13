<?php

namespace Jdf\HoroscopeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZodiacInstance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ZodiacInstance
{
    
    const TYPE_JOUR = 1;
    const TYPE_SEMAINE = 2;
    const TYPE_MOIS = 3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @ORM\Column(name="travail", type="string", length=255)
     */
    private $travail;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    private $famille;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;
    

    /**
     * @ORM\ManyToOne(targetEntity="ZodiacInfo", inversedBy="products")
     * @ORM\JoinColumn(name="zodiacinfo_id", referencedColumnName="id")
     */
    private $zodiacInfo;


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
     * Set date
     *
     * @param \DateTime $date
     * @return ZodiacInstance
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
     * @return ZodiacInstance
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
     * Set travail
     *
     * @param string $travail
     * @return ZodiacInstance
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

    /**
     * Set famille
     *
     * @param string $famille
     * @return ZodiacInstance
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return ZodiacInstance
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set zodiacInfo
     *
     * @param \Jdf\HoroscopeBundle\Entity\ZodiacInfo $zodiacInfo
     * @return ZodiacInstance
     */
    public function setZodiacInfo(\Jdf\HoroscopeBundle\Entity\ZodiacInfo $zodiacInfo = null)
    {
        $this->zodiacInfo = $zodiacInfo;

        return $this;
    }

    /**
     * Get zodiacInfo
     *
     * @return \Jdf\HoroscopeBundle\Entity\ZodiacInfo 
     */
    public function getZodiacInfo()
    {
        return $this->zodiacInfo;
    }
}
