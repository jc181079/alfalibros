<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposCustomers
 *
 * @ORM\Table(name="phppos_customers", uniqueConstraints={@ORM\UniqueConstraint(name="account_number", columns={"account_number"})}, indexes={@ORM\Index(name="person_id", columns={"person_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="cc_token", columns={"cc_token"}), @ORM\Index(name="phppos_customers_ibfk_2", columns={"tier_id"}), @ORM\Index(name="full_search", columns={"account_number", "company_name", "tax_certificate"}), @ORM\Index(name="account_number_search", columns={"account_number"}), @ORM\Index(name="company_name_search", columns={"company_name"}), @ORM\Index(name="tax_certificate_search", columns={"tax_certificate"})})
 * @ORM\Entity
 */
class PhpposCustomers
{
    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=255, nullable=true)
     */
    private $accountNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="override_default_tax", type="integer", nullable=false)
     */
    private $overrideDefaultTax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=false)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="balance", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $balance = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="credit_limit", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $creditLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $points = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="current_spend_for_points", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $currentSpendForPoints = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="current_sales_for_discount", type="integer", nullable=false)
     */
    private $currentSalesForDiscount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="taxable", type="integer", nullable=false)
     */
    private $taxable = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="tax_certificate", type="string", length=255, nullable=false)
     */
    private $taxCertificate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_token", type="string", length=255, nullable=true)
     */
    private $ccToken;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_preview", type="string", length=255, nullable=true)
     */
    private $ccPreview;

    /**
     * @var string
     *
     * @ORM\Column(name="card_issuer", type="string", length=255, nullable=true)
     */
    private $cardIssuer = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \principalBundle\Entity\PhpposPeople
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposPeople")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     * })
     */
    private $person;



    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     *
     * @return PhpposCustomers
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set overrideDefaultTax
     *
     * @param integer $overrideDefaultTax
     *
     * @return PhpposCustomers
     */
    public function setOverrideDefaultTax($overrideDefaultTax)
    {
        $this->overrideDefaultTax = $overrideDefaultTax;

        return $this;
    }

    /**
     * Get overrideDefaultTax
     *
     * @return integer
     */
    public function getOverrideDefaultTax()
    {
        return $this->overrideDefaultTax;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return PhpposCustomers
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return PhpposCustomers
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set creditLimit
     *
     * @param string $creditLimit
     *
     * @return PhpposCustomers
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return string
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Set points
     *
     * @param string $points
     *
     * @return PhpposCustomers
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set currentSpendForPoints
     *
     * @param string $currentSpendForPoints
     *
     * @return PhpposCustomers
     */
    public function setCurrentSpendForPoints($currentSpendForPoints)
    {
        $this->currentSpendForPoints = $currentSpendForPoints;

        return $this;
    }

    /**
     * Get currentSpendForPoints
     *
     * @return string
     */
    public function getCurrentSpendForPoints()
    {
        return $this->currentSpendForPoints;
    }

    /**
     * Set currentSalesForDiscount
     *
     * @param integer $currentSalesForDiscount
     *
     * @return PhpposCustomers
     */
    public function setCurrentSalesForDiscount($currentSalesForDiscount)
    {
        $this->currentSalesForDiscount = $currentSalesForDiscount;

        return $this;
    }

    /**
     * Get currentSalesForDiscount
     *
     * @return integer
     */
    public function getCurrentSalesForDiscount()
    {
        return $this->currentSalesForDiscount;
    }

    /**
     * Set taxable
     *
     * @param integer $taxable
     *
     * @return PhpposCustomers
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Get taxable
     *
     * @return integer
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set taxCertificate
     *
     * @param string $taxCertificate
     *
     * @return PhpposCustomers
     */
    public function setTaxCertificate($taxCertificate)
    {
        $this->taxCertificate = $taxCertificate;

        return $this;
    }

    /**
     * Get taxCertificate
     *
     * @return string
     */
    public function getTaxCertificate()
    {
        return $this->taxCertificate;
    }

    /**
     * Set ccToken
     *
     * @param string $ccToken
     *
     * @return PhpposCustomers
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
     * Set ccPreview
     *
     * @param string $ccPreview
     *
     * @return PhpposCustomers
     */
    public function setCcPreview($ccPreview)
    {
        $this->ccPreview = $ccPreview;

        return $this;
    }

    /**
     * Get ccPreview
     *
     * @return string
     */
    public function getCcPreview()
    {
        return $this->ccPreview;
    }

    /**
     * Set cardIssuer
     *
     * @param string $cardIssuer
     *
     * @return PhpposCustomers
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
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposCustomers
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tier
     *
     * @param \principalBundle\Entity\PhpposPriceTiers $tier
     *
     * @return PhpposCustomers
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
     * Set person
     *
     * @param \principalBundle\Entity\PhpposPeople $person
     *
     * @return PhpposCustomers
     */
    public function setPerson(\principalBundle\Entity\PhpposPeople $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \principalBundle\Entity\PhpposPeople
     */
    public function getPerson()
    {
        return $this->person;
    }
}
