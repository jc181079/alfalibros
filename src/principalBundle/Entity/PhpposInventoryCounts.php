<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposInventoryCounts
 *
 * @ORM\Table(name="phppos_inventory_counts", indexes={@ORM\Index(name="phppos_inventory_counts_ibfk_1", columns={"employee_id"}), @ORM\Index(name="phppos_inventory_counts_ibfk_2", columns={"location_id"})})
 * @ORM\Entity
 */
class PhpposInventoryCounts
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="count_date", type="datetime", nullable=false)
     */
    private $countDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

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
     * Set countDate
     *
     * @param \DateTime $countDate
     *
     * @return PhpposInventoryCounts
     */
    public function setCountDate($countDate)
    {
        $this->countDate = $countDate;

        return $this;
    }

    /**
     * Get countDate
     *
     * @return \DateTime
     */
    public function getCountDate()
    {
        return $this->countDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PhpposInventoryCounts
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PhpposInventoryCounts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
     * @return PhpposInventoryCounts
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
     * @return PhpposInventoryCounts
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
