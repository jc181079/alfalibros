<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposReceivingsItemsTaxes
 *
 * @ORM\Table(name="phppos_receivings_items_taxes", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="IDX_DAA2BC43C8178241", columns={"receiving_id"})})
 * @ORM\Entity
 */
class PhpposReceivingsItemsTaxes
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
     * @var \principalBundle\Entity\PhpposReceivings
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposReceivings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiving_id", referencedColumnName="receiving_id")
     * })
     */
    private $receiving;



    /**
     * Set cumulative
     *
     * @param integer $cumulative
     *
     * @return PhpposReceivingsItemsTaxes
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
     * @return PhpposReceivingsItemsTaxes
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
     * @return PhpposReceivingsItemsTaxes
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
     * @return PhpposReceivingsItemsTaxes
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
     * Set item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposReceivingsItemsTaxes
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
     * Set receiving
     *
     * @param \principalBundle\Entity\PhpposReceivings $receiving
     *
     * @return PhpposReceivingsItemsTaxes
     */
    public function setReceiving(\principalBundle\Entity\PhpposReceivings $receiving)
    {
        $this->receiving = $receiving;

        return $this;
    }

    /**
     * Get receiving
     *
     * @return \principalBundle\Entity\PhpposReceivings
     */
    public function getReceiving()
    {
        return $this->receiving;
    }
}
