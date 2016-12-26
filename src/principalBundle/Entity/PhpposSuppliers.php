<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSuppliers
 *
 * @ORM\Table(name="phppos_suppliers", uniqueConstraints={@ORM\UniqueConstraint(name="account_number", columns={"account_number"})}, indexes={@ORM\Index(name="person_id", columns={"person_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="full_search", columns={"account_number", "company_name"}), @ORM\Index(name="company_name_search", columns={"company_name"}), @ORM\Index(name="account_number_search", columns={"account_number"})})
 * @ORM\Entity
 */
class PhpposSuppliers
{
    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=false)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=255, nullable=true)
     */
    private $accountNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="override_default_tax", type="integer", nullable=false)
     */
    private $overrideDefaultTax = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposPeople
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposPeople")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     * })
     */
    private $person;



    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return PhpposSuppliers
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     *
     * @return PhpposSuppliers
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set overrideDefaultTax
     *
     * @param integer $overrideDefaultTax
     *
     * @return PhpposSuppliers
     */
    public function setOverrideDefaultTax($overrideDefaultTax)
    {
        $this->overrideDefaultTax = $overrideDefaultTax;

        return $this;
    }

    /**
     * Get overrideDefaultTax
     *
     * @return integer
     */
    public function getOverrideDefaultTax()
    {
        return $this->overrideDefaultTax;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposSuppliers
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
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
     * Set person
     *
     * @param \principalBundle\Entity\PhpposPeople $person
     *
     * @return PhpposSuppliers
     */
    public function setPerson(\principalBundle\Entity\PhpposPeople $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \principalBundle\Entity\PhpposPeople
     */
    public function getPerson()
    {
        return $this->person;
    }
}
