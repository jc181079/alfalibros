<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSales
 *
 * @ORM\Table(name="phppos_sales", indexes={@ORM\Index(name="customer_id", columns={"customer_id"}), @ORM\Index(name="employee_id", columns={"employee_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="location_id", columns={"location_id"}), @ORM\Index(name="phppos_sales_ibfk_4", columns={"deleted_by"}), @ORM\Index(name="sales_search", columns={"location_id", "store_account_payment", "sale_time", "sale_id"}), @ORM\Index(name="phppos_sales_ibfk_5", columns={"tier_id"}), @ORM\Index(name="phppos_sales_ibfk_7", columns={"register_id"}), @ORM\Index(name="phppos_sales_ibfk_6", columns={"sold_by_employee_id"}), @ORM\Index(name="phppos_sales_ibfk_8", columns={"signature_image_id"}), @ORM\Index(name="was_layaway", columns={"was_layaway"}), @ORM\Index(name="was_estimate", columns={"was_estimate"})})
 * @ORM\Entity
 */
class PhpposSales
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sale_time", type="datetime", nullable=false)
     */
    private $saleTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_comment_on_receipt", type="integer", nullable=false)
     */
    private $showCommentOnReceipt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="text", length=65535, nullable=true)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_ref_no", type="string", length=255, nullable=false)
     */
    private $ccRefNo;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_code", type="string", length=255, nullable=true)
     */
    private $authCode = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="suspended", type="integer", nullable=false)
     */
    private $suspended = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="store_account_payment", type="integer", nullable=false)
     */
    private $storeAccountPayment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="was_layaway", type="integer", nullable=false)
     */
    private $wasLayaway = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="was_estimate", type="integer", nullable=false)
     */
    private $wasEstimate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="points_used", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $pointsUsed = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="points_gained", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $pointsGained = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="did_redeem_discount", type="integer", nullable=false)
     */
    private $didRedeemDiscount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="deleted_taxes", type="text", length=65535, nullable=true)
     */
    private $deletedTaxes;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saleId;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sold_by_employee_id", referencedColumnName="person_id")
     * })
     */
    private $soldByEmployee;

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
     * @var \principalBundle\Entity\PhpposAppFiles
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposAppFiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="signature_image_id", referencedColumnName="file_id")
     * })
     */
    private $signatureImage;

    /**
     * @var \principalBundle\Entity\PhpposPriceTiers
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposPriceTiers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     * })
     */
    private $tier;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deleted_by", referencedColumnName="person_id")
     * })
     */
    private $deletedBy;

    /**
     * @var \principalBundle\Entity\PhpposCustomers
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="person_id")
     * })
     */
    private $customer;

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
     * Set saleTime
     *
     * @param \DateTime $saleTime
     *
     * @return PhpposSales
     */
    public function setSaleTime($saleTime)
    {
        $this->saleTime = $saleTime;

        return $this;
    }

    /**
     * Get saleTime
     *
     * @return \DateTime
     */
    public function getSaleTime()
    {
        return $this->saleTime;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PhpposSales
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
     * Set showCommentOnReceipt
     *
     * @param integer $showCommentOnReceipt
     *
     * @return PhpposSales
     */
    public function setShowCommentOnReceipt($showCommentOnReceipt)
    {
        $this->showCommentOnReceipt = $showCommentOnReceipt;

        return $this;
    }

    /**
     * Get showCommentOnReceipt
     *
     * @return integer
     */
    public function getShowCommentOnReceipt()
    {
        return $this->showCommentOnReceipt;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return PhpposSales
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
     * Set ccRefNo
     *
     * @param string $ccRefNo
     *
     * @return PhpposSales
     */
    public function setCcRefNo($ccRefNo)
    {
        $this->ccRefNo = $ccRefNo;

        return $this;
    }

    /**
     * Get ccRefNo
     *
     * @return string
     */
    public function getCcRefNo()
    {
        return $this->ccRefNo;
    }

    /**
     * Set authCode
     *
     * @param string $authCode
     *
     * @return PhpposSales
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;

        return $this;
    }

    /**
     * Get authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposSales
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
     * Set suspended
     *
     * @param integer $suspended
     *
     * @return PhpposSales
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
     * Set storeAccountPayment
     *
     * @param integer $storeAccountPayment
     *
     * @return PhpposSales
     */
    public function setStoreAccountPayment($storeAccountPayment)
    {
        $this->storeAccountPayment = $storeAccountPayment;

        return $this;
    }

    /**
     * Get storeAccountPayment
     *
     * @return integer
     */
    public function getStoreAccountPayment()
    {
        return $this->storeAccountPayment;
    }

    /**
     * Set wasLayaway
     *
     * @param integer $wasLayaway
     *
     * @return PhpposSales
     */
    public function setWasLayaway($wasLayaway)
    {
        $this->wasLayaway = $wasLayaway;

        return $this;
    }

    /**
     * Get wasLayaway
     *
     * @return integer
     */
    public function getWasLayaway()
    {
        return $this->wasLayaway;
    }

    /**
     * Set wasEstimate
     *
     * @param integer $wasEstimate
     *
     * @return PhpposSales
     */
    public function setWasEstimate($wasEstimate)
    {
        $this->wasEstimate = $wasEstimate;

        return $this;
    }

    /**
     * Get wasEstimate
     *
     * @return integer
     */
    public function getWasEstimate()
    {
        return $this->wasEstimate;
    }

    /**
     * Set pointsUsed
     *
     * @param string $pointsUsed
     *
     * @return PhpposSales
     */
    public function setPointsUsed($pointsUsed)
    {
        $this->pointsUsed = $pointsUsed;

        return $this;
    }

    /**
     * Get pointsUsed
     *
     * @return string
     */
    public function getPointsUsed()
    {
        return $this->pointsUsed;
    }

    /**
     * Set pointsGained
     *
     * @param string $pointsGained
     *
     * @return PhpposSales
     */
    public function setPointsGained($pointsGained)
    {
        $this->pointsGained = $pointsGained;

        return $this;
    }

    /**
     * Get pointsGained
     *
     * @return string
     */
    public function getPointsGained()
    {
        return $this->pointsGained;
    }

    /**
     * Set didRedeemDiscount
     *
     * @param integer $didRedeemDiscount
     *
     * @return PhpposSales
     */
    public function setDidRedeemDiscount($didRedeemDiscount)
    {
        $this->didRedeemDiscount = $didRedeemDiscount;

        return $this;
    }

    /**
     * Get didRedeemDiscount
     *
     * @return integer
     */
    public function getDidRedeemDiscount()
    {
        return $this->didRedeemDiscount;
    }

    /**
     * Set deletedTaxes
     *
     * @param string $deletedTaxes
     *
     * @return PhpposSales
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
     * Get saleId
     *
     * @return integer
     */
    public function getSaleId()
    {
        return $this->saleId;
    }

    /**
     * Set soldByEmployee
     *
     * @param \principalBundle\Entity\PhpposEmployees $soldByEmployee
     *
     * @return PhpposSales
     */
    public function setSoldByEmployee(\principalBundle\Entity\PhpposEmployees $soldByEmployee = null)
    {
        $this->soldByEmployee = $soldByEmployee;

        return $this;
    }

    /**
     * Get soldByEmployee
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getSoldByEmployee()
    {
        return $this->soldByEmployee;
    }

    /**
     * Set register
     *
     * @param \principalBundle\Entity\PhpposRegisters $register
     *
     * @return PhpposSales
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
     * Set signatureImage
     *
     * @param \principalBundle\Entity\PhpposAppFiles $signatureImage
     *
     * @return PhpposSales
     */
    public function setSignatureImage(\principalBundle\Entity\PhpposAppFiles $signatureImage = null)
    {
        $this->signatureImage = $signatureImage;

        return $this;
    }

    /**
     * Get signatureImage
     *
     * @return \principalBundle\Entity\PhpposAppFiles
     */
    public function getSignatureImage()
    {
        return $this->signatureImage;
    }

    /**
     * Set tier
     *
     * @param \principalBundle\Entity\PhpposPriceTiers $tier
     *
     * @return PhpposSales
     */
    public function setTier(\principalBundle\Entity\PhpposPriceTiers $tier = null)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return \principalBundle\Entity\PhpposPriceTiers
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Set deletedBy
     *
     * @param \principalBundle\Entity\PhpposEmployees $deletedBy
     *
     * @return PhpposSales
     */
    public function setDeletedBy(\principalBundle\Entity\PhpposEmployees $deletedBy = null)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set customer
     *
     * @param \principalBundle\Entity\PhpposCustomers $customer
     *
     * @return PhpposSales
     */
    public function setCustomer(\principalBundle\Entity\PhpposCustomers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \principalBundle\Entity\PhpposCustomers
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposSales
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
     * @return PhpposSales
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
