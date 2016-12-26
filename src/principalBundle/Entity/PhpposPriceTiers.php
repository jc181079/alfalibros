<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposPriceTiers
 *
 * @ORM\Table(name="phppos_price_tiers")
 * @ORM\Entity
 */
class PhpposPriceTiers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=false)
     */
    private $order = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItems", inversedBy="tier")
     * @ORM\JoinTable(name="phppos_items_tier_prices",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
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
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItemKits", inversedBy="tier")
     * @ORM\JoinTable(name="phppos_item_kits_tier_prices",
     *   joinColumns={
     *     @ORM\JoinColumn(name="tier_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="item_kit_id", referencedColumnName="item_kit_id")
     *   }
     * )
     */
    private $itemKit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->item = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemKit = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set order
     *
     * @param integer $order
     *
     * @return PhpposPriceTiers
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposPriceTiers
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposPriceTiers
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
     * @return PhpposPriceTiers
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
}
