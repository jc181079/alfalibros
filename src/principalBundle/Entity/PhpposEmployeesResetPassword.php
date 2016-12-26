<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposEmployeesResetPassword
 *
 * @ORM\Table(name="phppos_employees_reset_password", indexes={@ORM\Index(name="phppos_employees_reset_password_ibfk_1", columns={"employee_id"})})
 * @ORM\Entity
 */
class PhpposEmployeesResetPassword
{
    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire", type="datetime", nullable=false)
     */
    private $expire = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="person_id")
     * })
     */
    private $employee;



    /**
     * Set key
     *
     * @param string $key
     *
     * @return PhpposEmployeesResetPassword
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set expire
     *
     * @param \DateTime $expire
     *
     * @return PhpposEmployeesResetPassword
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->expire;
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
     * Set employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     *
     * @return PhpposEmployeesResetPassword
     */
    public function setEmployee(\principalBundle\Entity\PhpposEmployees $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
