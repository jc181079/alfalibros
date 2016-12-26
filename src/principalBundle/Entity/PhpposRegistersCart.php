<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposRegistersCart
 *
 * @ORM\Table(name="phppos_registers_cart", uniqueConstraints={@ORM\UniqueConstraint(name="register_id", columns={"register_id"})})
 * @ORM\Entity
 */
class PhpposRegistersCart
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposRegisters
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposRegisters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="register_id", referencedColumnName="register_id")
     * })
     */
    private $register;



    /**
     * Set data
     *
     * @param string $data
     *
     * @return PhpposRegistersCart
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

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
     * Set register
     *
     * @param \principalBundle\Entity\PhpposRegisters $register
     *
     * @return PhpposRegistersCart
     */
    public function setRegister(\principalBundle\Entity\PhpposRegisters $register = null)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return \principalBundle\Entity\PhpposRegisters
     */
    public function getRegister()
    {
        return $this->register;
    }
}
