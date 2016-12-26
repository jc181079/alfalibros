<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSuppliersTaxes
 *
 * @ORM\Table(name="phppos_suppliers_taxes", uniqueConstraints={@ORM\UniqueConstraint(name="unique_tax", columns={"supplier_id", "name", "percent"})}, indexes={@ORM\Index(name="IDX_9EEB4EDA2ADD6D8C", columns={"supplier_id"})})
 * @ORM\Entity
 */
class PhpposSuppliersTaxes
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
     * @var \principalBundle\Entity\PhpposSuppliers
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposSuppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="person_id")
     * })
     */
    private $supplier;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposSuppliersTaxes
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
     * @return PhpposSuppliersTaxes
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
     * @return PhpposSuppliersTaxes
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
     * Set supplier
     *
     * @param \principalBundle\Entity\PhpposSuppliers $supplier
     *
     * @return PhpposSuppliersTaxes
     */
    public function setSupplier(\principalBundle\Entity\PhpposSuppliers $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \principalBundle\Entity\PhpposSuppliers
     */
    public function getSupplier()
    {
        return $this->supplier;
    }
}
