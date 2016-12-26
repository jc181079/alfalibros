<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposAdditionalItemNumbers
 *
 * @ORM\Table(name="phppos_additional_item_numbers", uniqueConstraints={@ORM\UniqueConstraint(name="item_number", columns={"item_number"})}, indexes={@ORM\Index(name="item_number_search", columns={"item_number"}), @ORM\Index(name="IDX_EFECC45B126F525E", columns={"item_id"})})
 * @ORM\Entity
 */
class PhpposAdditionalItemNumbers
{
    /**
     * @var string
     *
     * @ORM\Column(name="item_number", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemNumber;

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
     * Set itemNumber
     *
     * @param string $itemNumber
     *
     * @return PhpposAdditionalItemNumbers
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
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposAdditionalItemNumbers
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
