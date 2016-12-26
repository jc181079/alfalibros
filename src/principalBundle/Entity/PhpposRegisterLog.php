<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposRegisterLog
 *
 * @ORM\Table(name="phppos_register_log", indexes={@ORM\Index(name="phppos_register_log_ibfk_1", columns={"employee_id_open"}), @ORM\Index(name="phppos_register_log_ibfk_2", columns={"register_id"}), @ORM\Index(name="phppos_register_log_ibfk_3", columns={"employee_id_close"})})
 * @ORM\Entity
 */
class PhpposRegisterLog
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shift_start", type="datetime", nullable=false)
     */
    private $shiftStart = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="shift_end", type="datetime", nullable=false)
     */
    private $shiftEnd = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="open_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $openAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="close_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $closeAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="cash_sales_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $cashSalesAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="total_cash_additions", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $totalCashAdditions = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_cash_subtractions", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $totalCashSubtractions = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="register_log_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registerLogId;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id_close", referencedColumnName="person_id")
     * })
     */
    private $employeeClose;

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
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id_open", referencedColumnName="person_id")
     * })
     */
    private $employeeOpen;



    /**
     * Set shiftStart
     *
     * @param \DateTime $shiftStart
     *
     * @return PhpposRegisterLog
     */
    public function setShiftStart($shiftStart)
    {
        $this->shiftStart = $shiftStart;

        return $this;
    }

    /**
     * Get shiftStart
     *
     * @return \DateTime
     */
    public function getShiftStart()
    {
        return $this->shiftStart;
    }

    /**
     * Set shiftEnd
     *
     * @param \DateTime $shiftEnd
     *
     * @return PhpposRegisterLog
     */
    public function setShiftEnd($shiftEnd)
    {
        $this->shiftEnd = $shiftEnd;

        return $this;
    }

    /**
     * Get shiftEnd
     *
     * @return \DateTime
     */
    public function getShiftEnd()
    {
        return $this->shiftEnd;
    }

    /**
     * Set openAmount
     *
     * @param string $openAmount
     *
     * @return PhpposRegisterLog
     */
    public function setOpenAmount($openAmount)
    {
        $this->openAmount = $openAmount;

        return $this;
    }

    /**
     * Get openAmount
     *
     * @return string
     */
    public function getOpenAmount()
    {
        return $this->openAmount;
    }

    /**
     * Set closeAmount
     *
     * @param string $closeAmount
     *
     * @return PhpposRegisterLog
     */
    public function setCloseAmount($closeAmount)
    {
        $this->closeAmount = $closeAmount;

        return $this;
    }

    /**
     * Get closeAmount
     *
     * @return string
     */
    public function getCloseAmount()
    {
        return $this->closeAmount;
    }

    /**
     * Set cashSalesAmount
     *
     * @param string $cashSalesAmount
     *
     * @return PhpposRegisterLog
     */
    public function setCashSalesAmount($cashSalesAmount)
    {
        $this->cashSalesAmount = $cashSalesAmount;

        return $this;
    }

    /**
     * Get cashSalesAmount
     *
     * @return string
     */
    public function getCashSalesAmount()
    {
        return $this->cashSalesAmount;
    }

    /**
     * Set totalCashAdditions
     *
     * @param string $totalCashAdditions
     *
     * @return PhpposRegisterLog
     */
    public function setTotalCashAdditions($totalCashAdditions)
    {
        $this->totalCashAdditions = $totalCashAdditions;

        return $this;
    }

    /**
     * Get totalCashAdditions
     *
     * @return string
     */
    public function getTotalCashAdditions()
    {
        return $this->totalCashAdditions;
    }

    /**
     * Set totalCashSubtractions
     *
     * @param string $totalCashSubtractions
     *
     * @return PhpposRegisterLog
     */
    public function setTotalCashSubtractions($totalCashSubtractions)
    {
        $this->totalCashSubtractions = $totalCashSubtractions;

        return $this;
    }

    /**
     * Get totalCashSubtractions
     *
     * @return string
     */
    public function getTotalCashSubtractions()
    {
        return $this->totalCashSubtractions;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return PhpposRegisterLog
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposRegisterLog
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
     * Get registerLogId
     *
     * @return integer
     */
    public function getRegisterLogId()
    {
        return $this->registerLogId;
    }

    /**
     * Set employeeClose
     *
     * @param \principalBundle\Entity\PhpposEmployees $employeeClose
     *
     * @return PhpposRegisterLog
     */
    public function setEmployeeClose(\principalBundle\Entity\PhpposEmployees $employeeClose = null)
    {
        $this->employeeClose = $employeeClose;

        return $this;
    }

    /**
     * Get employeeClose
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getEmployeeClose()
    {
        return $this->employeeClose;
    }

    /**
     * Set register
     *
     * @param \principalBundle\Entity\PhpposRegisters $register
     *
     * @return PhpposRegisterLog
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

    /**
     * Set employeeOpen
     *
     * @param \principalBundle\Entity\PhpposEmployees $employeeOpen
     *
     * @return PhpposRegisterLog
     */
    public function setEmployeeOpen(\principalBundle\Entity\PhpposEmployees $employeeOpen = null)
    {
        $this->employeeOpen = $employeeOpen;

        return $this;
    }

    /**
     * Get employeeOpen
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getEmployeeOpen()
    {
        return $this->employeeOpen;
    }
}
