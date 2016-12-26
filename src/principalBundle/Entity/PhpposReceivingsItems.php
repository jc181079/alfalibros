<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposReceivingsItems
 *
 * @ORM\Table(name="phppos_receivings_items", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="IDX_E26259B3C8178241", columns={"receiving_id"})})
 * @ORM\Entity
 */
class PhpposReceivingsItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="serialnumber", type="string", length=255, nullable=true)
     */
    private $serialnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_purchased", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $quantityPurchased = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_received", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $quantityReceived = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="item_cost_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $itemCostPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="item_unit_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $itemUnitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_percent", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discountPercent = '0.000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="date", nullable=true)
     */
    private $expireDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="line", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $line;

    /**
     * @var \principalBundle\Entity\PhpposReceivings
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposReceivings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiving_id", referencedColumnName="receiving_id")
     * })
     */
    private $receiving;

    /**
     * @var \principalBundle\Entity\PhpposItems
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return PhpposReceivingsItems
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
     * Set serialnumber
     *
     * @param string $serialnumber
     *
     * @return PhpposReceivingsItems
     */
    public function setSerialnumber($serialnumber)
    {
        $this->serialnumber = $serialnumber;

        return $this;
    }

    /**
     * Get serialnumber
     *
     * @return string
     */
    public function getSerialnumber()
    {
        return $this->serialnumber;
    }

    /**
     * Set quantityPurchased
     *
     * @param string $quantityPurchased
     *
     * @return PhpposReceivingsItems
     */
    public function setQuantityPurchased($quantityPurchased)
    {
        $this->quantityPurchased = $quantityPurchased;

        return $this;
    }

    /**
     * Get quantityPurchased
     *
     * @return string
     */
    public function getQuantityPurchased()
    {
        return $this->quantityPurchased;
    }

    /**
     * Set quantityReceived
     *
     * @param string $quantityReceived
     *
     * @return PhpposReceivingsItems
     */
    public function setQuantityReceived($quantityReceived)
    {
        $this->quantityReceived = $quantityReceived;

        return $this;
    }

    /**
     * Get quantityReceived
     *
     * @return string
     */
    public function getQuantityReceived()
    {
        return $this->quantityReceived;
    }

    /**
     * Set itemCostPrice
     *
     * @param string $itemCostPrice
     *
     * @return PhpposReceivingsItems
     */
    public function setItemCostPrice($itemCostPrice)
    {
        $this->itemCostPrice = $itemCostPrice;

        return $this;
    }

    /**
     * Get itemCostPrice
     *
     * @return string
     */
    public function getItemCostPrice()
    {
        return $this->itemCostPrice;
    }

    /**
     * Set itemUnitPrice
     *
     * @param string $itemUnitPrice
     *
     * @return PhpposReceivingsItems
     */
    public function setItemUnitPrice($itemUnitPrice)
    {
        $this->itemUnitPrice = $itemUnitPrice;

        return $this;
    }

    /**
     * Get itemUnitPrice
     *
     * @return string
     */
    public function getItemUnitPrice()
    {
        return $this->itemUnitPrice;
    }

    /**
     * Set discountPercent
     *
     * @param string $discountPercent
     *
     * @return PhpposReceivingsItems
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * Get discountPercent
     *
     * @return string
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return PhpposReceivingsItems
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set line
     *
     * @param integer $line
     *
     * @return PhpposReceivingsItems
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set receiving
     *
     * @param \principalBundle\Entity\PhpposReceivings $receiving
     *
     * @return PhpposReceivingsItems
     */
    public function setReceiving(\principalBundle\Entity\PhpposReceivings $receiving)
    {
        $this->receiving = $receiving;

        return $this;
    }

    /**
     * Get receiving
     *
     * @return \principalBundle\Entity\PhpposReceivings
     */
    public function getReceiving()
    {
        return $this->receiving;
    }

    /**
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposReceivingsItems
     */
    public function setItem(\principalBundle\Entity\PhpposItems $item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \principalBundle\Entity\PhpposItems
     */
    public function getItem()
    {
        return $this->item;
    }
}
