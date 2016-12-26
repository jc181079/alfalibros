<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposItemsTaxes
 *
 * @ORM\Table(name="phppos_items_taxes", uniqueConstraints={@ORM\UniqueConstraint(name="unique_tax", columns={"item_id", "name", "percent"})}, indexes={@ORM\Index(name="IDX_DCF11867126F525E", columns={"item_id"})})
 * @ORM\Entity
 */
class PhpposItemsTaxes
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
     * @var \principalBundle\Entity\PhpposItems
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposItemsTaxes
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
     * @return PhpposItemsTaxes
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
     * @return PhpposItemsTaxes
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
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposItemsTaxes
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
}
