<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposItemKitsTaxes
 *
 * @ORM\Table(name="phppos_item_kits_taxes", uniqueConstraints={@ORM\UniqueConstraint(name="unique_tax", columns={"item_kit_id", "name", "percent"})}, indexes={@ORM\Index(name="IDX_8E30B39DBC771520", columns={"item_kit_id"})})
 * @ORM\Entity
 */
class PhpposItemKitsTaxes
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
     * @ORM\Column(name="percent", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $percent;

    /**
     * @var integer
     *
     * @ORM\Column(name="cumulative", type="integer", nullable=false)
     */
    private $cumulative = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposItemKits
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposItemKits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_kit_id", referencedColumnName="item_kit_id")
     * })
     */
    private $itemKit;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposItemKitsTaxes
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
     * @return PhpposItemKitsTaxes
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
     * Set cumulative
     *
     * @param integer $cumulative
     *
     * @return PhpposItemKitsTaxes
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposItemKitsTaxes
     */
    public function setItemKit(\principalBundle\Entity\PhpposItemKits $itemKit = null)
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
