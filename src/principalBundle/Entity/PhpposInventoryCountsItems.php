<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposInventoryCountsItems
 *
 * @ORM\Table(name="phppos_inventory_counts_items", indexes={@ORM\Index(name="phppos_inventory_counts_items_ibfk_1", columns={"inventory_counts_id"}), @ORM\Index(name="phppos_inventory_counts_items_ibfk_2", columns={"item_id"})})
 * @ORM\Entity
 */
class PhpposInventoryCountsItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="count", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $count = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="actual_quantity", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $actualQuantity = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposItems
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

    /**
     * @var \principalBundle\Entity\PhpposInventoryCounts
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposInventoryCounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inventory_counts_id", referencedColumnName="id")
     * })
     */
    private $inventoryCounts;



    /**
     * Set count
     *
     * @param string $count
     *
     * @return PhpposInventoryCountsItems
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set actualQuantity
     *
     * @param string $actualQuantity
     *
     * @return PhpposInventoryCountsItems
     */
    public function setActualQuantity($actualQuantity)
    {
        $this->actualQuantity = $actualQuantity;

        return $this;
    }

    /**
     * Get actualQuantity
     *
     * @return string
     */
    public function getActualQuantity()
    {
        return $this->actualQuantity;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PhpposInventoryCountsItems
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposInventoryCountsItems
     */
    public function setItem(\principalBundle\Entity\PhpposItems $item = null)
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
     * Set inventoryCounts
     *
     * @param \principalBundle\Entity\PhpposInventoryCounts $inventoryCounts
     *
     * @return PhpposInventoryCountsItems
     */
    public function setInventoryCounts(\principalBundle\Entity\PhpposInventoryCounts $inventoryCounts = null)
    {
        $this->inventoryCounts = $inventoryCounts;

        return $this;
    }

    /**
     * Get inventoryCounts
     *
     * @return \principalBundle\Entity\PhpposInventoryCounts
     */
    public function getInventoryCounts()
    {
        return $this->inventoryCounts;
    }
}
