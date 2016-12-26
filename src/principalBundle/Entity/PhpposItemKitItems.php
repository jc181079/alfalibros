<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposItemKitItems
 *
 * @ORM\Table(name="phppos_item_kit_items", indexes={@ORM\Index(name="phppos_item_kit_items_ibfk_2", columns={"item_id"}), @ORM\Index(name="IDX_1B51673ABC771520", columns={"item_kit_id"})})
 * @ORM\Entity
 */
class PhpposItemKitItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quantity;

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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return PhpposItemKitItems
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposItemKitItems
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
     * Set itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposItemKitItems
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
