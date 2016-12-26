<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSalesItemKits
 *
 * @ORM\Table(name="phppos_sales_item_kits", indexes={@ORM\Index(name="item_kit_id", columns={"item_kit_id"}), @ORM\Index(name="IDX_F9665BF54A7E4868", columns={"sale_id"})})
 * @ORM\Entity
 */
class PhpposSalesItemKits
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
     * @ORM\Column(name="quantity_purchased", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $quantityPurchased = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="item_kit_cost_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $itemKitCostPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="item_kit_unit_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $itemKitUnitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="discount_percent", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $discountPercent = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $commission = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="line", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $line;

    /**
     * @var \principalBundle\Entity\PhpposSales
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposSales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_id", referencedColumnName="sale_id")
     * })
     */
    private $sale;

    /**
     * @var \principalBundle\Entity\PhpposItemKits
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposItemKits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_kit_id", referencedColumnName="item_kit_id")
     * })
     */
    private $itemKit;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return PhpposSalesItemKits
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
     * Set quantityPurchased
     *
     * @param string $quantityPurchased
     *
     * @return PhpposSalesItemKits
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
     * Set itemKitCostPrice
     *
     * @param string $itemKitCostPrice
     *
     * @return PhpposSalesItemKits
     */
    public function setItemKitCostPrice($itemKitCostPrice)
    {
        $this->itemKitCostPrice = $itemKitCostPrice;

        return $this;
    }

    /**
     * Get itemKitCostPrice
     *
     * @return string
     */
    public function getItemKitCostPrice()
    {
        return $this->itemKitCostPrice;
    }

    /**
     * Set itemKitUnitPrice
     *
     * @param string $itemKitUnitPrice
     *
     * @return PhpposSalesItemKits
     */
    public function setItemKitUnitPrice($itemKitUnitPrice)
    {
        $this->itemKitUnitPrice = $itemKitUnitPrice;

        return $this;
    }

    /**
     * Get itemKitUnitPrice
     *
     * @return string
     */
    public function getItemKitUnitPrice()
    {
        return $this->itemKitUnitPrice;
    }

    /**
     * Set discountPercent
     *
     * @param string $discountPercent
     *
     * @return PhpposSalesItemKits
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
     * Set commission
     *
     * @param string $commission
     *
     * @return PhpposSalesItemKits
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set line
     *
     * @param integer $line
     *
     * @return PhpposSalesItemKits
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
     * Set sale
     *
     * @param \principalBundle\Entity\PhpposSales $sale
     *
     * @return PhpposSalesItemKits
     */
    public function setSale(\principalBundle\Entity\PhpposSales $sale)
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

    /**
     * Set itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposSalesItemKits
     */
    public function setItemKit(\principalBundle\Entity\PhpposItemKits $itemKit)
    {
        $this->itemKit = $itemKit;

        return $this;
    }

    /**
     * Get itemKit
     *
     * @return \principalBundle\Entity\PhpposItemKits
     */
    public function getItemKit()
    {
        return $this->itemKit;
    }
}
