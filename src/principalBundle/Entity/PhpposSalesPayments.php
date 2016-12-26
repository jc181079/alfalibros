<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSalesPayments
 *
 * @ORM\Table(name="phppos_sales_payments", indexes={@ORM\Index(name="sale_id", columns={"sale_id"})})
 * @ORM\Entity
 */
class PhpposSalesPayments
{
    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=255, nullable=false)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $paymentAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_code", type="string", length=255, nullable=true)
     */
    private $authCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ref_no", type="string", length=255, nullable=true)
     */
    private $refNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_token", type="string", length=255, nullable=true)
     */
    private $ccToken = '';

    /**
     * @var string
     *
     * @ORM\Column(name="acq_ref_data", type="string", length=255, nullable=true)
     */
    private $acqRefData = '';

    /**
     * @var string
     *
     * @ORM\Column(name="process_data", type="string", length=255, nullable=true)
     */
    private $processData = '';

    /**
     * @var string
     *
     * @ORM\Column(name="entry_method", type="string", length=255, nullable=true)
     */
    private $entryMethod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="aid", type="string", length=255, nullable=true)
     */
    private $aid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tvr", type="string", length=255, nullable=true)
     */
    private $tvr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iad", type="string", length=255, nullable=true)
     */
    private $iad = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tsi", type="string", length=255, nullable=true)
     */
    private $tsi = '';

    /**
     * @var string
     *
     * @ORM\Column(name="arc", type="string", length=255, nullable=true)
     */
    private $arc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cvm", type="string", length=255, nullable=true)
     */
    private $cvm = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tran_type", type="string", length=255, nullable=true)
     */
    private $tranType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="application_label", type="string", length=255, nullable=true)
     */
    private $applicationLabel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="truncated_card", type="string", length=255, nullable=true)
     */
    private $truncatedCard = '';

    /**
     * @var string
     *
     * @ORM\Column(name="card_issuer", type="string", length=255, nullable=true)
     */
    private $cardIssuer = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=false)
     */
    private $paymentDate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentId;

    /**
     * @var \principalBundle\Entity\PhpposSales
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposSales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_id", referencedColumnName="sale_id")
     * })
     */
    private $sale;



    /**
     * Set paymentType
     *
     * @param string $paymentType
     *
     * @return PhpposSalesPayments
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
     * Set paymentAmount
     *
     * @param string $paymentAmount
     *
     * @return PhpposSalesPayments
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * Get paymentAmount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Set authCode
     *
     * @param string $authCode
     *
     * @return PhpposSalesPayments
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
     * Set refNo
     *
     * @param string $refNo
     *
     * @return PhpposSalesPayments
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;

        return $this;
    }

    /**
     * Get refNo
     *
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * Set ccToken
     *
     * @param string $ccToken
     *
     * @return PhpposSalesPayments
     */
    public function setCcToken($ccToken)
    {
        $this->ccToken = $ccToken;

        return $this;
    }

    /**
     * Get ccToken
     *
     * @return string
     */
    public function getCcToken()
    {
        return $this->ccToken;
    }

    /**
     * Set acqRefData
     *
     * @param string $acqRefData
     *
     * @return PhpposSalesPayments
     */
    public function setAcqRefData($acqRefData)
    {
        $this->acqRefData = $acqRefData;

        return $this;
    }

    /**
     * Get acqRefData
     *
     * @return string
     */
    public function getAcqRefData()
    {
        return $this->acqRefData;
    }

    /**
     * Set processData
     *
     * @param string $processData
     *
     * @return PhpposSalesPayments
     */
    public function setProcessData($processData)
    {
        $this->processData = $processData;

        return $this;
    }

    /**
     * Get processData
     *
     * @return string
     */
    public function getProcessData()
    {
        return $this->processData;
    }

    /**
     * Set entryMethod
     *
     * @param string $entryMethod
     *
     * @return PhpposSalesPayments
     */
    public function setEntryMethod($entryMethod)
    {
        $this->entryMethod = $entryMethod;

        return $this;
    }

    /**
     * Get entryMethod
     *
     * @return string
     */
    public function getEntryMethod()
    {
        return $this->entryMethod;
    }

    /**
     * Set aid
     *
     * @param string $aid
     *
     * @return PhpposSalesPayments
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return string
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set tvr
     *
     * @param string $tvr
     *
     * @return PhpposSalesPayments
     */
    public function setTvr($tvr)
    {
        $this->tvr = $tvr;

        return $this;
    }

    /**
     * Get tvr
     *
     * @return string
     */
    public function getTvr()
    {
        return $this->tvr;
    }

    /**
     * Set iad
     *
     * @param string $iad
     *
     * @return PhpposSalesPayments
     */
    public function setIad($iad)
    {
        $this->iad = $iad;

        return $this;
    }

    /**
     * Get iad
     *
     * @return string
     */
    public function getIad()
    {
        return $this->iad;
    }

    /**
     * Set tsi
     *
     * @param string $tsi
     *
     * @return PhpposSalesPayments
     */
    public function setTsi($tsi)
    {
        $this->tsi = $tsi;

        return $this;
    }

    /**
     * Get tsi
     *
     * @return string
     */
    public function getTsi()
    {
        return $this->tsi;
    }

    /**
     * Set arc
     *
     * @param string $arc
     *
     * @return PhpposSalesPayments
     */
    public function setArc($arc)
    {
        $this->arc = $arc;

        return $this;
    }

    /**
     * Get arc
     *
     * @return string
     */
    public function getArc()
    {
        return $this->arc;
    }

    /**
     * Set cvm
     *
     * @param string $cvm
     *
     * @return PhpposSalesPayments
     */
    public function setCvm($cvm)
    {
        $this->cvm = $cvm;

        return $this;
    }

    /**
     * Get cvm
     *
     * @return string
     */
    public function getCvm()
    {
        return $this->cvm;
    }

    /**
     * Set tranType
     *
     * @param string $tranType
     *
     * @return PhpposSalesPayments
     */
    public function setTranType($tranType)
    {
        $this->tranType = $tranType;

        return $this;
    }

    /**
     * Get tranType
     *
     * @return string
     */
    public function getTranType()
    {
        return $this->tranType;
    }

    /**
     * Set applicationLabel
     *
     * @param string $applicationLabel
     *
     * @return PhpposSalesPayments
     */
    public function setApplicationLabel($applicationLabel)
    {
        $this->applicationLabel = $applicationLabel;

        return $this;
    }

    /**
     * Get applicationLabel
     *
     * @return string
     */
    public function getApplicationLabel()
    {
        return $this->applicationLabel;
    }

    /**
     * Set truncatedCard
     *
     * @param string $truncatedCard
     *
     * @return PhpposSalesPayments
     */
    public function setTruncatedCard($truncatedCard)
    {
        $this->truncatedCard = $truncatedCard;

        return $this;
    }

    /**
     * Get truncatedCard
     *
     * @return string
     */
    public function getTruncatedCard()
    {
        return $this->truncatedCard;
    }

    /**
     * Set cardIssuer
     *
     * @param string $cardIssuer
     *
     * @return PhpposSalesPayments
     */
    public function setCardIssuer($cardIssuer)
    {
        $this->cardIssuer = $cardIssuer;

        return $this;
    }

    /**
     * Get cardIssuer
     *
     * @return string
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     *
     * @return PhpposSalesPayments
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Get paymentId
     *
     * @return integer
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set sale
     *
     * @param \principalBundle\Entity\PhpposSales $sale
     *
     * @return PhpposSalesPayments
     */
    public function setSale(\principalBundle\Entity\PhpposSales $sale = null)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return \principalBundle\Entity\PhpposSales
     */
    public function getSale()
    {
        return $this->sale;
    }
}
