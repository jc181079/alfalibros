<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposCustomersTaxes
 *
 * @ORM\Table(name="phppos_customers_taxes", uniqueConstraints={@ORM\UniqueConstraint(name="unique_tax", columns={"customer_id", "name", "percent"})}, indexes={@ORM\Index(name="IDX_F44C405F9395C3F3", columns={"customer_id"})})
 * @ORM\Entity
 */
class PhpposCustomersTaxes
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
     * @var \principalBundle\Entity\PhpposCustomers
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="person_id")
     * })
     */
    private $customer;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposCustomersTaxes
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
     * @return PhpposCustomersTaxes
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
     * @return PhpposCustomersTaxes
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
     * Set customer
     *
     * @param \principalBundle\Entity\PhpposCustomers $customer
     *
     * @return PhpposCustomersTaxes
     */
    public function setCustomer(\principalBundle\Entity\PhpposCustomers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \principalBundle\Entity\PhpposCustomers
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
