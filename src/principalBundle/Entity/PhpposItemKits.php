<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposItemKits
 *
 * @ORM\Table(name="phppos_item_kits", uniqueConstraints={@ORM\UniqueConstraint(name="item_kit_number", columns={"item_kit_number"}), @ORM\UniqueConstraint(name="product_id", columns={"product_id"})}, indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="phppos_item_kits_ibfk_1", columns={"category_id"}), @ORM\Index(name="full_search", columns={"name", "item_kit_number", "product_id", "description"}), @ORM\Index(name="name_search", columns={"name"}), @ORM\Index(name="item_kit_number_search", columns={"item_kit_number"}), @ORM\Index(name="product_id_search", columns={"product_id"}), @ORM\Index(name="description_search", columns={"description"})})
 * @ORM\Entity
 */
class PhpposItemKits
{
    /**
     * @var string
     *
     * @ORM\Column(name="item_kit_number", type="string", length=255, nullable=true)
     */
    private $itemKitNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="product_id", type="string", length=255, nullable=true)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_included", type="integer", nullable=false)
     */
    private $taxIncluded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="cost_price", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $costPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="override_default_tax", type="integer", nullable=false)
     */
    private $overrideDefaultTax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commission_percent", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $commissionPercent = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="commission_percent_type", type="string", length=255, nullable=true)
     */
    private $commissionPercentType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="commission_fixed", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $commissionFixed = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="change_cost_price", type="integer", nullable=false)
     */
    private $changeCostPrice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_kit_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemKitId;

    /**
     * @var \principalBundle\Entity\PhpposCategories
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposLocations", mappedBy="itemKit")
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposTags", inversedBy="itemKit")
     * @ORM\JoinTable(name="phppos_item_kits_tags",
     *   joinColumns={
     *     @ORM\JoinColumn(name="item_kit_id", referencedColumnName="item_kit_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     *   }
     * )
     */
    private $tag;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposPriceTiers", mappedBy="itemKit")
     */
    private $tier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->location = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tier = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set itemKitNumber
     *
     * @param string $itemKitNumber
     *
     * @return PhpposItemKits
     */
    public function setItemKitNumber($itemKitNumber)
    {
        $this->itemKitNumber = $itemKitNumber;

        return $this;
    }

    /**
     * Get itemKitNumber
     *
     * @return string
     */
    public function getItemKitNumber()
    {
        return $this->itemKitNumber;
    }

    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return PhpposItemKits
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposItemKits
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
     * Set description
     *
     * @param string $description
     *
     * @return PhpposItemKits
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
     * Set taxIncluded
     *
     * @param integer $taxIncluded
     *
     * @return PhpposItemKits
     */
    public function setTaxIncluded($taxIncluded)
    {
        $this->taxIncluded = $taxIncluded;

        return $this;
    }

    /**
     * Get taxIncluded
     *
     * @return integer
     */
    public function getTaxIncluded()
    {
        return $this->taxIncluded;
    }

    /**
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return PhpposItemKits
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set costPrice
     *
     * @param string $costPrice
     *
     * @return PhpposItemKits
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice = $costPrice;

        return $this;
    }

    /**
     * Get costPrice
     *
     * @return string
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * Set overrideDefaultTax
     *
     * @param integer $overrideDefaultTax
     *
     * @return PhpposItemKits
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
     * Set commissionPercent
     *
     * @param string $commissionPercent
     *
     * @return PhpposItemKits
     */
    public function setCommissionPercent($commissionPercent)
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Get commissionPercent
     *
     * @return string
     */
    public function getCommissionPercent()
    {
        return $this->commissionPercent;
    }

    /**
     * Set commissionPercentType
     *
     * @param string $commissionPercentType
     *
     * @return PhpposItemKits
     */
    public function setCommissionPercentType($commissionPercentType)
    {
        $this->commissionPercentType = $commissionPercentType;

        return $this;
    }

    /**
     * Get commissionPercentType
     *
     * @return string
     */
    public function getCommissionPercentType()
    {
        return $this->commissionPercentType;
    }

    /**
     * Set commissionFixed
     *
     * @param string $commissionFixed
     *
     * @return PhpposItemKits
     */
    public function setCommissionFixed($commissionFixed)
    {
        $this->commissionFixed = $commissionFixed;

        return $this;
    }

    /**
     * Get commissionFixed
     *
     * @return string
     */
    public function getCommissionFixed()
    {
        return $this->commissionFixed;
    }

    /**
     * Set changeCostPrice
     *
     * @param integer $changeCostPrice
     *
     * @return PhpposItemKits
     */
    public function setChangeCostPrice($changeCostPrice)
    {
        $this->changeCostPrice = $changeCostPrice;

        return $this;
    }

    /**
     * Get changeCostPrice
     *
     * @return integer
     */
    public function getChangeCostPrice()
    {
        return $this->changeCostPrice;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposItemKits
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
     * Get itemKitId
     *
     * @return integer
     */
    public function getItemKitId()
    {
        return $this->itemKitId;
    }

    /**
     * Set category
     *
     * @param \principalBundle\Entity\PhpposCategories $category
     *
     * @return PhpposItemKits
     */
    public function setCategory(\principalBundle\Entity\PhpposCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \principalBundle\Entity\PhpposCategories
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposItemKits
     */
    public function addLocation(\principalBundle\Entity\PhpposLocations $location)
    {
        $this->location[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     */
    public function removeLocation(\principalBundle\Entity\PhpposLocations $location)
    {
        $this->location->removeElement($location);
    }

    /**
     * Get location
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add tag
     *
     * @param \principalBundle\Entity\PhpposTags $tag
     *
     * @return PhpposItemKits
     */
    public function addTag(\principalBundle\Entity\PhpposTags $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \principalBundle\Entity\PhpposTags $tag
     */
    public function removeTag(\principalBundle\Entity\PhpposTags $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Add tier
     *
     * @param \principalBundle\Entity\PhpposPriceTiers $tier
     *
     * @return PhpposItemKits
     */
    public function addTier(\principalBundle\Entity\PhpposPriceTiers $tier)
    {
        $this->tier[] = $tier;

        return $this;
    }

    /**
     * Remove tier
     *
     * @param \principalBundle\Entity\PhpposPriceTiers $tier
     */
    public function removeTier(\principalBundle\Entity\PhpposPriceTiers $tier)
    {
        $this->tier->removeElement($tier);
    }

    /**
     * Get tier
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTier()
    {
        return $this->tier;
    }
}
