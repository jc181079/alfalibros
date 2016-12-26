<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposEmployeesTimeClock
 *
 * @ORM\Table(name="phppos_employees_time_clock", indexes={@ORM\Index(name="phppos_employees_time_clock_ibfk_1", columns={"employee_id"}), @ORM\Index(name="phppos_employees_time_clock_ibfk_2", columns={"location_id"})})
 * @ORM\Entity
 */
class PhpposEmployeesTimeClock
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clock_in", type="datetime", nullable=false)
     */
    private $clockIn = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clock_out", type="datetime", nullable=false)
     */
    private $clockOut = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="clock_in_comment", type="text", length=65535, nullable=false)
     */
    private $clockInComment;

    /**
     * @var string
     *
     * @ORM\Column(name="clock_out_comment", type="text", length=65535, nullable=false)
     */
    private $clockOutComment;

    /**
     * @var string
     *
     * @ORM\Column(name="hourly_pay_rate", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $hourlyPayRate = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="person_id")
     * })
     */
    private $employee;



    /**
     * Set clockIn
     *
     * @param \DateTime $clockIn
     *
     * @return PhpposEmployeesTimeClock
     */
    public function setClockIn($clockIn)
    {
        $this->clockIn = $clockIn;

        return $this;
    }

    /**
     * Get clockIn
     *
     * @return \DateTime
     */
    public function getClockIn()
    {
        return $this->clockIn;
    }

    /**
     * Set clockOut
     *
     * @param \DateTime $clockOut
     *
     * @return PhpposEmployeesTimeClock
     */
    public function setClockOut($clockOut)
    {
        $this->clockOut = $clockOut;

        return $this;
    }

    /**
     * Get clockOut
     *
     * @return \DateTime
     */
    public function getClockOut()
    {
        return $this->clockOut;
    }

    /**
     * Set clockInComment
     *
     * @param string $clockInComment
     *
     * @return PhpposEmployeesTimeClock
     */
    public function setClockInComment($clockInComment)
    {
        $this->clockInComment = $clockInComment;

        return $this;
    }

    /**
     * Get clockInComment
     *
     * @return string
     */
    public function getClockInComment()
    {
        return $this->clockInComment;
    }

    /**
     * Set clockOutComment
     *
     * @param string $clockOutComment
     *
     * @return PhpposEmployeesTimeClock
     */
    public function setClockOutComment($clockOutComment)
    {
        $this->clockOutComment = $clockOutComment;

        return $this;
    }

    /**
     * Get clockOutComment
     *
     * @return string
     */
    public function getClockOutComment()
    {
        return $this->clockOutComment;
    }

    /**
     * Set hourlyPayRate
     *
     * @param string $hourlyPayRate
     *
     * @return PhpposEmployeesTimeClock
     */
    public function setHourlyPayRate($hourlyPayRate)
    {
        $this->hourlyPayRate = $hourlyPayRate;

        return $this;
    }

    /**
     * Get hourlyPayRate
     *
     * @return string
     */
    public function getHourlyPayRate()
    {
        return $this->hourlyPayRate;
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
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposEmployeesTimeClock
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

    /**
     * Set employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     *
     * @return PhpposEmployeesTimeClock
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
