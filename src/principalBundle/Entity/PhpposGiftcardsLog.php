<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposGiftcardsLog
 *
 * @ORM\Table(name="phppos_giftcards_log", indexes={@ORM\Index(name="phppos_giftcards_log_ibfk_1", columns={"giftcard_id"})})
 * @ORM\Entity
 */
class PhpposGiftcardsLog
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="log_date", type="datetime", nullable=false)
     */
    private $logDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $transactionAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="log_message", type="text", length=65535, nullable=false)
     */
    private $logMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposGiftcards
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposGiftcards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="giftcard_id", referencedColumnName="giftcard_id")
     * })
     */
    private $giftcard;



    /**
     * Set logDate
     *
     * @param \DateTime $logDate
     *
     * @return PhpposGiftcardsLog
     */
    public function setLogDate($logDate)
    {
        $this->logDate = $logDate;

        return $this;
    }

    /**
     * Get logDate
     *
     * @return \DateTime
     */
    public function getLogDate()
    {
        return $this->logDate;
    }

    /**
     * Set transactionAmount
     *
     * @param string $transactionAmount
     *
     * @return PhpposGiftcardsLog
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
     * Set logMessage
     *
     * @param string $logMessage
     *
     * @return PhpposGiftcardsLog
     */
    public function setLogMessage($logMessage)
    {
        $this->logMessage = $logMessage;

        return $this;
    }

    /**
     * Get logMessage
     *
     * @return string
     */
    public function getLogMessage()
    {
        return $this->logMessage;
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
     * Set giftcard
     *
     * @param \principalBundle\Entity\PhpposGiftcards $giftcard
     *
     * @return PhpposGiftcardsLog
     */
    public function setGiftcard(\principalBundle\Entity\PhpposGiftcards $giftcard = null)
    {
        $this->giftcard = $giftcard;

        return $this;
    }

    /**
     * Get giftcard
     *
     * @return \principalBundle\Entity\PhpposGiftcards
     */
    public function getGiftcard()
    {
        return $this->giftcard;
    }
}
