<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposMessageReceiver
 *
 * @ORM\Table(name="phppos_message_receiver", indexes={@ORM\Index(name="phppos_message_receiver_ibfk_2", columns={"receiver_id"}), @ORM\Index(name="phppos_message_receiver_key_1", columns={"message_id", "receiver_id"}), @ORM\Index(name="IDX_372D880F537A1329", columns={"message_id"})})
 * @ORM\Entity
 */
class PhpposMessageReceiver
{
    /**
     * @var integer
     *
     * @ORM\Column(name="message_read", type="integer", nullable=false)
     */
    private $messageRead = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receiver_id", referencedColumnName="person_id")
     * })
     */
    private $receiver;

    /**
     * @var \principalBundle\Entity\PhpposMessages
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposMessages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     * })
     */
    private $message;



    /**
     * Set messageRead
     *
     * @param integer $messageRead
     *
     * @return PhpposMessageReceiver
     */
    public function setMessageRead($messageRead)
    {
        $this->messageRead = $messageRead;

        return $this;
    }

    /**
     * Get messageRead
     *
     * @return integer
     */
    public function getMessageRead()
    {
        return $this->messageRead;
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
     * Set receiver
     *
     * @param \principalBundle\Entity\PhpposEmployees $receiver
     *
     * @return PhpposMessageReceiver
     */
    public function setReceiver(\principalBundle\Entity\PhpposEmployees $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set message
     *
     * @param \principalBundle\Entity\PhpposMessages $message
     *
     * @return PhpposMessageReceiver
     */
    public function setMessage(\principalBundle\Entity\PhpposMessages $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \principalBundle\Entity\PhpposMessages
     */
    public function getMessage()
    {
        return $this->message;
    }
}
