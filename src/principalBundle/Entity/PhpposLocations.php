<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposLocations
 *
 * @ORM\Table(name="phppos_locations", indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="full_search", columns={"name", "address", "phone", "email"}), @ORM\Index(name="name_search", columns={"name"}), @ORM\Index(name="address_search", columns={"address"}), @ORM\Index(name="phone_search", columns={"phone"}), @ORM\Index(name="email_search", columns={"email"})})
 * @ORM\Entity
 */
class PhpposLocations
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="text", length=65535, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="text", length=65535, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="text", length=65535, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="return_policy", type="text", length=65535, nullable=true)
     */
    private $returnPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="receive_stock_alert", type="text", length=65535, nullable=true)
     */
    private $receiveStockAlert;

    /**
     * @var string
     *
     * @ORM\Column(name="stock_alert_email", type="text", length=65535, nullable=true)
     */
    private $stockAlertEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="text", length=65535, nullable=true)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="mailchimp_api_key", type="text", length=65535, nullable=true)
     */
    private $mailchimpApiKey;

    /**
     * @var string
     *
     * @ORM\Column(name="enable_credit_card_processing", type="text", length=65535, nullable=true)
     */
    private $enableCreditCardProcessing;

    /**
     * @var string
     *
     * @ORM\Column(name="credit_card_processor", type="text", length=65535, nullable=true)
     */
    private $creditCardProcessor;

    /**
     * @var string
     *
     * @ORM\Column(name="hosted_checkout_merchant_id", type="text", length=65535, nullable=true)
     */
    private $hostedCheckoutMerchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="hosted_checkout_merchant_password", type="text", length=65535, nullable=true)
     */
    private $hostedCheckoutMerchantPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="emv_merchant_id", type="text", length=65535, nullable=true)
     */
    private $emvMerchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="listener_port", type="text", length=65535, nullable=true)
     */
    private $listenerPort;

    /**
     * @var string
     *
     * @ORM\Column(name="com_port", type="text", length=65535, nullable=true)
     */
    private $comPort;

    /**
     * @var string
     *
     * @ORM\Column(name="stripe_public", type="text", length=65535, nullable=true)
     */
    private $stripePublic;

    /**
     * @var string
     *
     * @ORM\Column(name="stripe_private", type="text", length=65535, nullable=true)
     */
    private $stripePrivate;

    /**
     * @var string
     *
     * @ORM\Column(name="stripe_currency_code", type="text", length=65535, nullable=true)
     */
    private $stripeCurrencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="braintree_merchant_id", type="text", length=65535, nullable=true)
     */
    private $braintreeMerchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="braintree_public_key", type="text", length=65535, nullable=true)
     */
    private $braintreePublicKey;

    /**
     * @var string
     *
     * @ORM\Column(name="braintree_private_key", type="text", length=65535, nullable=true)
     */
    private $braintreePrivateKey;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_1_rate", type="text", length=65535, nullable=true)
     */
    private $defaultTax1Rate;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_1_name", type="text", length=65535, nullable=true)
     */
    private $defaultTax1Name;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_2_rate", type="text", length=65535, nullable=true)
     */
    private $defaultTax2Rate;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_2_name", type="text", length=65535, nullable=true)
     */
    private $defaultTax2Name;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_2_cumulative", type="text", length=65535, nullable=true)
     */
    private $defaultTax2Cumulative;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_3_rate", type="text", length=65535, nullable=true)
     */
    private $defaultTax3Rate;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_3_name", type="text", length=65535, nullable=true)
     */
    private $defaultTax3Name;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_4_rate", type="text", length=65535, nullable=true)
     */
    private $defaultTax4Rate;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_4_name", type="text", length=65535, nullable=true)
     */
    private $defaultTax4Name;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_5_rate", type="text", length=65535, nullable=true)
     */
    private $defaultTax5Rate;

    /**
     * @var string
     *
     * @ORM\Column(name="default_tax_5_name", type="text", length=65535, nullable=true)
     */
    private $defaultTax5Name;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="location_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItems", inversedBy="location")
     * @ORM\JoinTable(name="phppos_location_items",
     *   joinColumns={
     *     @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     *   }
     * )
     */
    private $item;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItemKits", inversedBy="location")
     * @ORM\JoinTable(name="phppos_location_item_kits",
     *   joinColumns={
     *     @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="item_kit_id", referencedColumnName="item_kit_id")
     *   }
     * )
     */
    private $itemKit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposEmployees", mappedBy="location")
     */
    private $employee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->item = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemKit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->employee = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposLocations
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return PhpposLocations
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return PhpposLocations
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return PhpposLocations
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return PhpposLocations
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return PhpposLocations
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set returnPolicy
     *
     * @param string $returnPolicy
     *
     * @return PhpposLocations
     */
    public function setReturnPolicy($returnPolicy)
    {
        $this->returnPolicy = $returnPolicy;

        return $this;
    }

    /**
     * Get returnPolicy
     *
     * @return string
     */
    public function getReturnPolicy()
    {
        return $this->returnPolicy;
    }

    /**
     * Set receiveStockAlert
     *
     * @param string $receiveStockAlert
     *
     * @return PhpposLocations
     */
    public function setReceiveStockAlert($receiveStockAlert)
    {
        $this->receiveStockAlert = $receiveStockAlert;

        return $this;
    }

    /**
     * Get receiveStockAlert
     *
     * @return string
     */
    public function getReceiveStockAlert()
    {
        return $this->receiveStockAlert;
    }

    /**
     * Set stockAlertEmail
     *
     * @param string $stockAlertEmail
     *
     * @return PhpposLocations
     */
    public function setStockAlertEmail($stockAlertEmail)
    {
        $this->stockAlertEmail = $stockAlertEmail;

        return $this;
    }

    /**
     * Get stockAlertEmail
     *
     * @return string
     */
    public function getStockAlertEmail()
    {
        return $this->stockAlertEmail;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return PhpposLocations
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set mailchimpApiKey
     *
     * @param string $mailchimpApiKey
     *
     * @return PhpposLocations
     */
    public function setMailchimpApiKey($mailchimpApiKey)
    {
        $this->mailchimpApiKey = $mailchimpApiKey;

        return $this;
    }

    /**
     * Get mailchimpApiKey
     *
     * @return string
     */
    public function getMailchimpApiKey()
    {
        return $this->mailchimpApiKey;
    }

    /**
     * Set enableCreditCardProcessing
     *
     * @param string $enableCreditCardProcessing
     *
     * @return PhpposLocations
     */
    public function setEnableCreditCardProcessing($enableCreditCardProcessing)
    {
        $this->enableCreditCardProcessing = $enableCreditCardProcessing;

        return $this;
    }

    /**
     * Get enableCreditCardProcessing
     *
     * @return string
     */
    public function getEnableCreditCardProcessing()
    {
        return $this->enableCreditCardProcessing;
    }

    /**
     * Set creditCardProcessor
     *
     * @param string $creditCardProcessor
     *
     * @return PhpposLocations
     */
    public function setCreditCardProcessor($creditCardProcessor)
    {
        $this->creditCardProcessor = $creditCardProcessor;

        return $this;
    }

    /**
     * Get creditCardProcessor
     *
     * @return string
     */
    public function getCreditCardProcessor()
    {
        return $this->creditCardProcessor;
    }

    /**
     * Set hostedCheckoutMerchantId
     *
     * @param string $hostedCheckoutMerchantId
     *
     * @return PhpposLocations
     */
    public function setHostedCheckoutMerchantId($hostedCheckoutMerchantId)
    {
        $this->hostedCheckoutMerchantId = $hostedCheckoutMerchantId;

        return $this;
    }

    /**
     * Get hostedCheckoutMerchantId
     *
     * @return string
     */
    public function getHostedCheckoutMerchantId()
    {
        return $this->hostedCheckoutMerchantId;
    }

    /**
     * Set hostedCheckoutMerchantPassword
     *
     * @param string $hostedCheckoutMerchantPassword
     *
     * @return PhpposLocations
     */
    public function setHostedCheckoutMerchantPassword($hostedCheckoutMerchantPassword)
    {
        $this->hostedCheckoutMerchantPassword = $hostedCheckoutMerchantPassword;

        return $this;
    }

    /**
     * Get hostedCheckoutMerchantPassword
     *
     * @return string
     */
    public function getHostedCheckoutMerchantPassword()
    {
        return $this->hostedCheckoutMerchantPassword;
    }

    /**
     * Set emvMerchantId
     *
     * @param string $emvMerchantId
     *
     * @return PhpposLocations
     */
    public function setEmvMerchantId($emvMerchantId)
    {
        $this->emvMerchantId = $emvMerchantId;

        return $this;
    }

    /**
     * Get emvMerchantId
     *
     * @return string
     */
    public function getEmvMerchantId()
    {
        return $this->emvMerchantId;
    }

    /**
     * Set listenerPort
     *
     * @param string $listenerPort
     *
     * @return PhpposLocations
     */
    public function setListenerPort($listenerPort)
    {
        $this->listenerPort = $listenerPort;

        return $this;
    }

    /**
     * Get listenerPort
     *
     * @return string
     */
    public function getListenerPort()
    {
        return $this->listenerPort;
    }

    /**
     * Set comPort
     *
     * @param string $comPort
     *
     * @return PhpposLocations
     */
    public function setComPort($comPort)
    {
        $this->comPort = $comPort;

        return $this;
    }

    /**
     * Get comPort
     *
     * @return string
     */
    public function getComPort()
    {
        return $this->comPort;
    }

    /**
     * Set stripePublic
     *
     * @param string $stripePublic
     *
     * @return PhpposLocations
     */
    public function setStripePublic($stripePublic)
    {
        $this->stripePublic = $stripePublic;

        return $this;
    }

    /**
     * Get stripePublic
     *
     * @return string
     */
    public function getStripePublic()
    {
        return $this->stripePublic;
    }

    /**
     * Set stripePrivate
     *
     * @param string $stripePrivate
     *
     * @return PhpposLocations
     */
    public function setStripePrivate($stripePrivate)
    {
        $this->stripePrivate = $stripePrivate;

        return $this;
    }

    /**
     * Get stripePrivate
     *
     * @return string
     */
    public function getStripePrivate()
    {
        return $this->stripePrivate;
    }

    /**
     * Set stripeCurrencyCode
     *
     * @param string $stripeCurrencyCode
     *
     * @return PhpposLocations
     */
    public function setStripeCurrencyCode($stripeCurrencyCode)
    {
        $this->stripeCurrencyCode = $stripeCurrencyCode;

        return $this;
    }

    /**
     * Get stripeCurrencyCode
     *
     * @return string
     */
    public function getStripeCurrencyCode()
    {
        return $this->stripeCurrencyCode;
    }

    /**
     * Set braintreeMerchantId
     *
     * @param string $braintreeMerchantId
     *
     * @return PhpposLocations
     */
    public function setBraintreeMerchantId($braintreeMerchantId)
    {
        $this->braintreeMerchantId = $braintreeMerchantId;

        return $this;
    }

    /**
     * Get braintreeMerchantId
     *
     * @return string
     */
    public function getBraintreeMerchantId()
    {
        return $this->braintreeMerchantId;
    }

    /**
     * Set braintreePublicKey
     *
     * @param string $braintreePublicKey
     *
     * @return PhpposLocations
     */
    public function setBraintreePublicKey($braintreePublicKey)
    {
        $this->braintreePublicKey = $braintreePublicKey;

        return $this;
    }

    /**
     * Get braintreePublicKey
     *
     * @return string
     */
    public function getBraintreePublicKey()
    {
        return $this->braintreePublicKey;
    }

    /**
     * Set braintreePrivateKey
     *
     * @param string $braintreePrivateKey
     *
     * @return PhpposLocations
     */
    public function setBraintreePrivateKey($braintreePrivateKey)
    {
        $this->braintreePrivateKey = $braintreePrivateKey;

        return $this;
    }

    /**
     * Get braintreePrivateKey
     *
     * @return string
     */
    public function getBraintreePrivateKey()
    {
        return $this->braintreePrivateKey;
    }

    /**
     * Set defaultTax1Rate
     *
     * @param string $defaultTax1Rate
     *
     * @return PhpposLocations
     */
    public function setDefaultTax1Rate($defaultTax1Rate)
    {
        $this->defaultTax1Rate = $defaultTax1Rate;

        return $this;
    }

    /**
     * Get defaultTax1Rate
     *
     * @return string
     */
    public function getDefaultTax1Rate()
    {
        return $this->defaultTax1Rate;
    }

    /**
     * Set defaultTax1Name
     *
     * @param string $defaultTax1Name
     *
     * @return PhpposLocations
     */
    public function setDefaultTax1Name($defaultTax1Name)
    {
        $this->defaultTax1Name = $defaultTax1Name;

        return $this;
    }

    /**
     * Get defaultTax1Name
     *
     * @return string
     */
    public function getDefaultTax1Name()
    {
        return $this->defaultTax1Name;
    }

    /**
     * Set defaultTax2Rate
     *
     * @param string $defaultTax2Rate
     *
     * @return PhpposLocations
     */
    public function setDefaultTax2Rate($defaultTax2Rate)
    {
        $this->defaultTax2Rate = $defaultTax2Rate;

        return $this;
    }

    /**
     * Get defaultTax2Rate
     *
     * @return string
     */
    public function getDefaultTax2Rate()
    {
        return $this->defaultTax2Rate;
    }

    /**
     * Set defaultTax2Name
     *
     * @param string $defaultTax2Name
     *
     * @return PhpposLocations
     */
    public function setDefaultTax2Name($defaultTax2Name)
    {
        $this->defaultTax2Name = $defaultTax2Name;

        return $this;
    }

    /**
     * Get defaultTax2Name
     *
     * @return string
     */
    public function getDefaultTax2Name()
    {
        return $this->defaultTax2Name;
    }

    /**
     * Set defaultTax2Cumulative
     *
     * @param string $defaultTax2Cumulative
     *
     * @return PhpposLocations
     */
    public function setDefaultTax2Cumulative($defaultTax2Cumulative)
    {
        $this->defaultTax2Cumulative = $defaultTax2Cumulative;

        return $this;
    }

    /**
     * Get defaultTax2Cumulative
     *
     * @return string
     */
    public function getDefaultTax2Cumulative()
    {
        return $this->defaultTax2Cumulative;
    }

    /**
     * Set defaultTax3Rate
     *
     * @param string $defaultTax3Rate
     *
     * @return PhpposLocations
     */
    public function setDefaultTax3Rate($defaultTax3Rate)
    {
        $this->defaultTax3Rate = $defaultTax3Rate;

        return $this;
    }

    /**
     * Get defaultTax3Rate
     *
     * @return string
     */
    public function getDefaultTax3Rate()
    {
        return $this->defaultTax3Rate;
    }

    /**
     * Set defaultTax3Name
     *
     * @param string $defaultTax3Name
     *
     * @return PhpposLocations
     */
    public function setDefaultTax3Name($defaultTax3Name)
    {
        $this->defaultTax3Name = $defaultTax3Name;

        return $this;
    }

    /**
     * Get defaultTax3Name
     *
     * @return string
     */
    public function getDefaultTax3Name()
    {
        return $this->defaultTax3Name;
    }

    /**
     * Set defaultTax4Rate
     *
     * @param string $defaultTax4Rate
     *
     * @return PhpposLocations
     */
    public function setDefaultTax4Rate($defaultTax4Rate)
    {
        $this->defaultTax4Rate = $defaultTax4Rate;

        return $this;
    }

    /**
     * Get defaultTax4Rate
     *
     * @return string
     */
    public function getDefaultTax4Rate()
    {
        return $this->defaultTax4Rate;
    }

    /**
     * Set defaultTax4Name
     *
     * @param string $defaultTax4Name
     *
     * @return PhpposLocations
     */
    public function setDefaultTax4Name($defaultTax4Name)
    {
        $this->defaultTax4Name = $defaultTax4Name;

        return $this;
    }

    /**
     * Get defaultTax4Name
     *
     * @return string
     */
    public function getDefaultTax4Name()
    {
        return $this->defaultTax4Name;
    }

    /**
     * Set defaultTax5Rate
     *
     * @param string $defaultTax5Rate
     *
     * @return PhpposLocations
     */
    public function setDefaultTax5Rate($defaultTax5Rate)
    {
        $this->defaultTax5Rate = $defaultTax5Rate;

        return $this;
    }

    /**
     * Get defaultTax5Rate
     *
     * @return string
     */
    public function getDefaultTax5Rate()
    {
        return $this->defaultTax5Rate;
    }

    /**
     * Set defaultTax5Name
     *
     * @param string $defaultTax5Name
     *
     * @return PhpposLocations
     */
    public function setDefaultTax5Name($defaultTax5Name)
    {
        $this->defaultTax5Name = $defaultTax5Name;

        return $this;
    }

    /**
     * Get defaultTax5Name
     *
     * @return string
     */
    public function getDefaultTax5Name()
    {
        return $this->defaultTax5Name;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposLocations
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
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Add item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposLocations
     */
    public function addItem(\principalBundle\Entity\PhpposItems $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     */
    public function removeItem(\principalBundle\Entity\PhpposItems $item)
    {
        $this->item->removeElement($item);
    }

    /**
     * Get item
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Add itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposLocations
     */
    public function addItemKit(\principalBundle\Entity\PhpposItemKits $itemKit)
    {
        $this->itemKit[] = $itemKit;

        return $this;
    }

    /**
     * Remove itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     */
    public function removeItemKit(\principalBundle\Entity\PhpposItemKits $itemKit)
    {
        $this->itemKit->removeElement($itemKit);
    }

    /**
     * Get itemKit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemKit()
    {
        return $this->itemKit;
    }

    /**
     * Add employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     *
     * @return PhpposLocations
     */
    public function addEmployee(\principalBundle\Entity\PhpposEmployees $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     */
    public function removeEmployee(\principalBundle\Entity\PhpposEmployees $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
