<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposSessions
 *
 * @ORM\Table(name="phppos_sessions", indexes={@ORM\Index(name="phppos_sessions_timestamp", columns={"timestamp"})})
 * @ORM\Entity
 */
class PhpposSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return PhpposSessions
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return PhpposSessions
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return PhpposSessions
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
