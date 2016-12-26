<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposLocationItemsTierPrices
 *
 * @ORM\Table(name="phppos_location_items_tier_prices", indexes={@ORM\Index(name="phppos_location_items_tier_prices_ibfk_2", columns={"location_id"}), @ORM\Index(name="phppos_location_items_tier_prices_ibfk_3", columns={"item_id"}), @ORM\Index(name="IDX_EB20410CA354F9DC", columns={"tier_id"})})
 * @ORM\Entity
 */
class PhpposLocationItemsTierPrices
{
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $unitPrice = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="percent_off", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $percentOff;

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
     * @var \principalBundle\Entity\PhpposLocations
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     * })
     */
    private $location;

    /**
     * @var \principalBundle\Entity\PhpposPriceTiers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposPriceTiers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     * })
     */
    private $tier;



    /**
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return PhpposLocationItemsTierPrices
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
     * Set percentOff
     *
     * @param string $percentOff
     *
     * @return PhpposLocationItemsTierPrices
     */
    public function setPercentOff($percentOff)
    {
        $this->percentOff = $percentOff;

        return $this;
    }

    /**
     * Get percentOff
     *
     * @return string
     */
    public function getPercentOff()
    {
        return $this->percentOff;
    }

    /**
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposLocationItemsTierPrices
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

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposLocationItemsTierPrices
     */
    public function setLocation(\principalBundle\Entity\PhpposLocations $location)
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
     * Set tier
     *
     * @param \principalBundle\Entity\PhpposPriceTiers $tier
     *
     * @return PhpposLocationItemsTierPrices
     */
    public function setTier(\principalBundle\Entity\PhpposPriceTiers $tier)
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
}
