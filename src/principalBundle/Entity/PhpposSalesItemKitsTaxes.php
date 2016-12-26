<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSalesItemKitsTaxes
 *
 * @ORM\Table(name="phppos_sales_item_kits_taxes", indexes={@ORM\Index(name="item_id", columns={"item_kit_id"}), @ORM\Index(name="IDX_E672DD944A7E4868", columns={"sale_id"})})
 * @ORM\Entity
 */
class PhpposSalesItemKitsTaxes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cumulative", type="integer", nullable=false)
     */
    private $cumulative = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="line", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $line;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="percent", type="decimal")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $percent;

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
     * @var \principalBundle\Entity\PhpposSalesItemKits
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposSalesItemKits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_id", referencedColumnName="sale_id")
     * })
     */
    private $sale;



    /**
     * Set cumulative
     *
     * @param integer $cumulative
     *
     * @return PhpposSalesItemKitsTaxes
     */
    public function setCumulative($cumulative)
    {
        $this->cumulative = $cumulative;

        return $this;
    }

    /**
     * Get cumulative
     *
     * @return integer
     */
    public function getCumulative()
    {
        return $this->cumulative;
    }

    /**
     * Set line
     *
     * @param integer $line
     *
     * @return PhpposSalesItemKitsTaxes
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
     * Set name
     *
     * @param string $name
     *
     * @return PhpposSalesItemKitsTaxes
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
     * Set percent
     *
     * @param string $percent
     *
     * @return PhpposSalesItemKitsTaxes
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposSalesItemKitsTaxes
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

    /**
     * Set sale
     *
     * @param \principalBundle\Entity\PhpposSalesItemKits $sale
     *
     * @return PhpposSalesItemKitsTaxes
     */
    public function setSale(\principalBundle\Entity\PhpposSalesItemKits $sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return \principalBundle\Entity\PhpposSalesItemKits
     */
    public function getSale()
    {
        return $this->sale;
    }
}
