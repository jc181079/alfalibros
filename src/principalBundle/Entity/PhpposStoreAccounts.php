<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposStoreAccounts
 *
 * @ORM\Table(name="phppos_store_accounts", indexes={@ORM\Index(name="phppos_store_accounts_ibfk_1", columns={"sale_id"}), @ORM\Index(name="phppos_store_accounts_ibfk_2", columns={"customer_id"})})
 * @ORM\Entity
 */
class PhpposStoreAccounts
{
    /**
     * @var string
     *
     * @ORM\Column(name="transaction_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $transactionAmount = '0.0000000000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="balance", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $balance = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="sno", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sno;

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
     * @var \principalBundle\Entity\PhpposSales
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposSales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_id", referencedColumnName="sale_id")
     * })
     */
    private $sale;



    /**
     * Set transactionAmount
     *
     * @param string $transactionAmount
     *
     * @return PhpposStoreAccounts
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;

        return $this;
    }

    /**
     * Get transactionAmount
     *
     * @return string
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PhpposStoreAccounts
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set balance
     *
     * @param string $balance
     *
     * @return PhpposStoreAccounts
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PhpposStoreAccounts
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
     * Get sno
     *
     * @return integer
     */
    public function getSno()
    {
        return $this->sno;
    }

    /**
     * Set customer
     *
     * @param \principalBundle\Entity\PhpposCustomers $customer
     *
     * @return PhpposStoreAccounts
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

    /**
     * Set sale
     *
     * @param \principalBundle\Entity\PhpposSales $sale
     *
     * @return PhpposStoreAccounts
     */
    public function setSale(\principalBundle\Entity\PhpposSales $sale = null)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return \principalBundle\Entity\PhpposSales
     */
    public function getSale()
    {
        return $this->sale;
    }
}
