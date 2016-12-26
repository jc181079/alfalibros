<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposRegisters
 *
 * @ORM\Table(name="phppos_registers", indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="phppos_registers_ibfk_1", columns={"location_id"})})
 * @ORM\Entity
 */
class PhpposRegisters
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="register_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registerId;

    /**
     * @var \principalBundle\Entity\PhpposLocations
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     * })
     */
    private $location;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposRegisters
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
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposRegisters
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get registerId
     *
     * @return integer
     */
    public function getRegisterId()
    {
        return $this->registerId;
    }

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposRegisters
     */
    public function setLocation(\principalBundle\Entity\PhpposLocations $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \principalBundle\Entity\PhpposLocations
     */
    public function getLocation()
    {
        return $this->location;
    }
}
