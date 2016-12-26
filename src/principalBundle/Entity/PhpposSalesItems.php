<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSalesItems
 *
 * @ORM\Table(name="phppos_sales_items", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="IDX_DF92DDF4A7E4868", columns={"sale_id"})})
 * @ORM\Entity
 */
class PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * Set itemCostPrice
     *
     * @param string $itemCostPrice
     *
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * @return PhpposSalesItems
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
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposSalesItems
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
