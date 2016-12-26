<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposItems
 *
 * @ORM\Table(name="phppos_items", uniqueConstraints={@ORM\UniqueConstraint(name="item_number", columns={"item_number"}), @ORM\UniqueConstraint(name="product_id", columns={"product_id"})}, indexes={@ORM\Index(name="phppos_items_ibfk_1", columns={"supplier_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="phppos_items_ibfk_2", columns={"image_id"}), @ORM\Index(name="phppos_items_ibfk_3", columns={"category_id"}), @ORM\Index(name="full_search", columns={"name", "item_number", "product_id", "description"}), @ORM\Index(name="name_search", columns={"name"}), @ORM\Index(name="item_number_search", columns={"item_number"}), @ORM\Index(name="product_id_search", columns={"product_id"}), @ORM\Index(name="description_search", columns={"description"}), @ORM\Index(name="size_search", columns={"size"})})
 * @ORM\Entity
 */
class PhpposItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="item_number", type="string", length=255, nullable=true)
     */
    private $itemNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="product_id", type="string", length=255, nullable=true)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255, nullable=false)
     */
    private $size = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_included", type="integer", nullable=false)
     */
    private $taxIncluded = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cost_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $costPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_price", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $promoPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reorder_level", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $reorderLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_days", type="integer", nullable=true)
     */
    private $expireDays;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_alt_description", type="boolean", nullable=false)
     */
    private $allowAltDescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_serialized", type="boolean", nullable=false)
     */
    private $isSerialized;

    /**
     * @var integer
     *
     * @ORM\Column(name="override_default_tax", type="integer", nullable=false)
     */
    private $overrideDefaultTax = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_service", type="integer", nullable=false)
     */
    private $isService = '0';

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
     * @ORM\Column(name="item_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

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
     * @var \principalBundle\Entity\PhpposCategories
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \principalBundle\Entity\PhpposAppFiles
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposAppFiles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="file_id")
     * })
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposLocations", mappedBy="item")
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposTags", inversedBy="item")
     * @ORM\JoinTable(name="phppos_items_tags",
     *   joinColumns={
     *     @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
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
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposPriceTiers", mappedBy="item")
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
     * Set name
     *
     * @param string $name
     *
     * @return PhpposItems
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
     * Set itemNumber
     *
     * @param string $itemNumber
     *
     * @return PhpposItems
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get itemNumber
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return PhpposItems
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
     * Set description
     *
     * @param string $description
     *
     * @return PhpposItems
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
     * Set size
     *
     * @param string $size
     *
     * @return PhpposItems
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set taxIncluded
     *
     * @param integer $taxIncluded
     *
     * @return PhpposItems
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
     * Set costPrice
     *
     * @param string $costPrice
     *
     * @return PhpposItems
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
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return PhpposItems
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
     * Set promoPrice
     *
     * @param string $promoPrice
     *
     * @return PhpposItems
     */
    public function setPromoPrice($promoPrice)
    {
        $this->promoPrice = $promoPrice;

        return $this;
    }

    /**
     * Get promoPrice
     *
     * @return string
     */
    public function getPromoPrice()
    {
        return $this->promoPrice;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return PhpposItems
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return PhpposItems
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set reorderLevel
     *
     * @param string $reorderLevel
     *
     * @return PhpposItems
     */
    public function setReorderLevel($reorderLevel)
    {
        $this->reorderLevel = $reorderLevel;

        return $this;
    }

    /**
     * Get reorderLevel
     *
     * @return string
     */
    public function getReorderLevel()
    {
        return $this->reorderLevel;
    }

    /**
     * Set expireDays
     *
     * @param integer $expireDays
     *
     * @return PhpposItems
     */
    public function setExpireDays($expireDays)
    {
        $this->expireDays = $expireDays;

        return $this;
    }

    /**
     * Get expireDays
     *
     * @return integer
     */
    public function getExpireDays()
    {
        return $this->expireDays;
    }

    /**
     * Set allowAltDescription
     *
     * @param boolean $allowAltDescription
     *
     * @return PhpposItems
     */
    public function setAllowAltDescription($allowAltDescription)
    {
        $this->allowAltDescription = $allowAltDescription;

        return $this;
    }

    /**
     * Get allowAltDescription
     *
     * @return boolean
     */
    public function getAllowAltDescription()
    {
        return $this->allowAltDescription;
    }

    /**
     * Set isSerialized
     *
     * @param boolean $isSerialized
     *
     * @return PhpposItems
     */
    public function setIsSerialized($isSerialized)
    {
        $this->isSerialized = $isSerialized;

        return $this;
    }

    /**
     * Get isSerialized
     *
     * @return boolean
     */
    public function getIsSerialized()
    {
        return $this->isSerialized;
    }

    /**
     * Set overrideDefaultTax
     *
     * @param integer $overrideDefaultTax
     *
     * @return PhpposItems
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
     * Set isService
     *
     * @param integer $isService
     *
     * @return PhpposItems
     */
    public function setIsService($isService)
    {
        $this->isService = $isService;

        return $this;
    }

    /**
     * Get isService
     *
     * @return integer
     */
    public function getIsService()
    {
        return $this->isService;
    }

    /**
     * Set commissionPercent
     *
     * @param string $commissionPercent
     *
     * @return PhpposItems
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
     * @return PhpposItems
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
     * @return PhpposItems
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
     * @return PhpposItems
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
     * @return PhpposItems
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
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set supplier
     *
     * @param \principalBundle\Entity\PhpposSuppliers $supplier
     *
     * @return PhpposItems
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
     * Set category
     *
     * @param \principalBundle\Entity\PhpposCategories $category
     *
     * @return PhpposItems
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
     * Set image
     *
     * @param \principalBundle\Entity\PhpposAppFiles $image
     *
     * @return PhpposItems
     */
    public function setImage(\principalBundle\Entity\PhpposAppFiles $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \principalBundle\Entity\PhpposAppFiles
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposItems
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
     * @return PhpposItems
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
     * @return PhpposItems
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
