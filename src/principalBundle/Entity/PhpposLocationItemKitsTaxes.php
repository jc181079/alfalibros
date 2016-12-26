<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposLocationItemKitsTaxes
 *
 * @ORM\Table(name="phppos_location_item_kits_taxes", uniqueConstraints={@ORM\UniqueConstraint(name="unique_tax", columns={"location_id", "item_kit_id", "name", "percent"})}, indexes={@ORM\Index(name="phppos_location_item_kits_taxes_ibfk_2", columns={"item_kit_id"}), @ORM\Index(name="IDX_AC6FA0B464D218E", columns={"location_id"})})
 * @ORM\Entity
 */
class PhpposLocationItemKitsTaxes
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
     * @ORM\Column(name="percent", type="decimal", precision=16, scale=3, nullable=false)
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
     * @var \principalBundle\Entity\PhpposLocations
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposLocations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     * })
     */
    private $location;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposLocationItemKitsTaxes
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
     * @return PhpposLocationItemKitsTaxes
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
     * @return PhpposLocationItemKitsTaxes
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
     * @return PhpposLocationItemKitsTaxes
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

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposLocationItemKitsTaxes
     */
    public function setLocation(\principalBundle\Entity\PhpposLocations $location = null)
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
}
