<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposRegisterLogAudit
 *
 * @ORM\Table(name="phppos_register_log_audit", indexes={@ORM\Index(name="register_log_audit_ibfk_1", columns={"register_log_id"}), @ORM\Index(name="register_log_audit_ibfk_2", columns={"employee_id"})})
 * @ORM\Entity
 */
class PhpposRegisterLogAudit
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $amount = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=false)
     */
    private $note;

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
     * @var \principalBundle\Entity\PhpposRegisterLog
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposRegisterLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="register_log_id", referencedColumnName="register_log_id")
     * })
     */
    private $registerLog;



    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PhpposRegisterLogAudit
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
     * Set amount
     *
     * @param string $amount
     *
     * @return PhpposRegisterLogAudit
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return PhpposRegisterLogAudit
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
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
     * @return PhpposRegisterLogAudit
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

    /**
     * Set registerLog
     *
     * @param \principalBundle\Entity\PhpposRegisterLog $registerLog
     *
     * @return PhpposRegisterLogAudit
     */
    public function setRegisterLog(\principalBundle\Entity\PhpposRegisterLog $registerLog = null)
    {
        $this->registerLog = $registerLog;

        return $this;
    }

    /**
     * Get registerLog
     *
     * @return \principalBundle\Entity\PhpposRegisterLog
     */
    public function getRegisterLog()
    {
        return $this->registerLog;
    }
}
