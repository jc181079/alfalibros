<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposReceivings
 *
 * @ORM\Table(name="phppos_receivings", indexes={@ORM\Index(name="supplier_id", columns={"supplier_id"}), @ORM\Index(name="employee_id", columns={"employee_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="location_id", columns={"location_id"}), @ORM\Index(name="transfer_to_location_id", columns={"transfer_to_location_id"})})
 * @ORM\Entity
 */
class PhpposReceivings
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="receiving_time", type="datetime", nullable=false)
     */
    private $receivingTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=255, nullable=true)
     */
    private $paymentType;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted_by", type="integer", nullable=true)
     */
    private $deletedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="suspended", type="integer", nullable=false)
     */
    private $suspended = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="deleted_taxes", type="text", length=65535, nullable=true)
     */
    private $deletedTaxes;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_po", type="integer", nullable=false)
     */
    private $isPo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="receiving_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $receivingId;

    /**
     * @var \principalBundle\Entity\PhpposLocations
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transfer_to_location_id", referencedColumnName="location_id")
     * })
     */
    private $transferToLocation;

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
     * @var \principalBundle\Entity\PhpposSuppliers
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposSuppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="person_id")
     * })
     */
    private $supplier;

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
     * Set receivingTime
     *
     * @param \DateTime $receivingTime
     *
     * @return PhpposReceivings
     */
    public function setReceivingTime($receivingTime)
    {
        $this->receivingTime = $receivingTime;

        return $this;
    }

    /**
     * Get receivingTime
     *
     * @return \DateTime
     */
    public function getReceivingTime()
    {
        return $this->receivingTime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PhpposReceivings
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
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return PhpposReceivings
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposReceivings
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
     * Set deletedBy
     *
     * @param integer $deletedBy
     *
     * @return PhpposReceivings
     */
    public function setDeletedBy($deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return integer
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set suspended
     *
     * @param integer $suspended
     *
     * @return PhpposReceivings
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return integer
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set deletedTaxes
     *
     * @param string $deletedTaxes
     *
     * @return PhpposReceivings
     */
    public function setDeletedTaxes($deletedTaxes)
    {
        $this->deletedTaxes = $deletedTaxes;

        return $this;
    }

    /**
     * Get deletedTaxes
     *
     * @return string
     */
    public function getDeletedTaxes()
    {
        return $this->deletedTaxes;
    }

    /**
     * Set isPo
     *
     * @param integer $isPo
     *
     * @return PhpposReceivings
     */
    public function setIsPo($isPo)
    {
        $this->isPo = $isPo;

        return $this;
    }

    /**
     * Get isPo
     *
     * @return integer
     */
    public function getIsPo()
    {
        return $this->isPo;
    }

    /**
     * Get receivingId
     *
     * @return integer
     */
    public function getReceivingId()
    {
        return $this->receivingId;
    }

    /**
     * Set transferToLocation
     *
     * @param \principalBundle\Entity\PhpposLocations $transferToLocation
     *
     * @return PhpposReceivings
     */
    public function setTransferToLocation(\principalBundle\Entity\PhpposLocations $transferToLocation = null)
    {
        $this->transferToLocation = $transferToLocation;

        return $this;
    }

    /**
     * Get transferToLocation
     *
     * @return \principalBundle\Entity\PhpposLocations
     */
    public function getTransferToLocation()
    {
        return $this->transferToLocation;
    }

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposReceivings
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
     * Set supplier
     *
     * @param \principalBundle\Entity\PhpposSuppliers $supplier
     *
     * @return PhpposReceivings
     */
    public function setSupplier(\principalBundle\Entity\PhpposSuppliers $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \principalBundle\Entity\PhpposSuppliers
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     *
     * @return PhpposReceivings
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
