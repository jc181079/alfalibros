<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposGiftcards
 *
 * @ORM\Table(name="phppos_giftcards", uniqueConstraints={@ORM\UniqueConstraint(name="giftcard_number", columns={"giftcard_number"})}, indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="phppos_giftcards_ibfk_1", columns={"customer_id"}), @ORM\Index(name="giftcard_number_search", columns={"description", "giftcard_number"})})
 * @ORM\Entity
 */
class PhpposGiftcards
{
    /**
     * @var string
     *
     * @ORM\Column(name="giftcard_number", type="string", length=255, nullable=true)
     */
    private $giftcardNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="inactive", type="integer", nullable=false)
     */
    private $inactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="giftcard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $giftcardId;

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
     * Set giftcardNumber
     *
     * @param string $giftcardNumber
     *
     * @return PhpposGiftcards
     */
    public function setGiftcardNumber($giftcardNumber)
    {
        $this->giftcardNumber = $giftcardNumber;

        return $this;
    }

    /**
     * Get giftcardNumber
     *
     * @return string
     */
    public function getGiftcardNumber()
    {
        return $this->giftcardNumber;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PhpposGiftcards
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PhpposGiftcards
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set inactive
     *
     * @param integer $inactive
     *
     * @return PhpposGiftcards
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;

        return $this;
    }

    /**
     * Get inactive
     *
     * @return integer
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposGiftcards
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
     * Get giftcardId
     *
     * @return integer
     */
    public function getGiftcardId()
    {
        return $this->giftcardId;
    }

    /**
     * Set customer
     *
     * @param \principalBundle\Entity\PhpposCustomers $customer
     *
     * @return PhpposGiftcards
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
}
