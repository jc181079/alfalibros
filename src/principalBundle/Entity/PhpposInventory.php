<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposInventory
 *
 * @ORM\Table(name="phppos_inventory", indexes={@ORM\Index(name="phppos_inventory_ibfk_1", columns={"trans_items"}), @ORM\Index(name="phppos_inventory_ibfk_2", columns={"trans_user"}), @ORM\Index(name="location_id", columns={"location_id"})})
 * @ORM\Entity
 */
class PhpposInventory
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trans_date", type="datetime", nullable=false)
     */
    private $transDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="trans_comment", type="text", length=65535, nullable=false)
     */
    private $transComment;

    /**
     * @var string
     *
     * @ORM\Column(name="trans_inventory", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $transInventory = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="trans_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $transId;

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
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trans_user", referencedColumnName="person_id")
     * })
     */
    private $transUser;

    /**
     * @var \principalBundle\Entity\PhpposItems
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trans_items", referencedColumnName="item_id")
     * })
     */
    private $transItems;



    /**
     * Set transDate
     *
     * @param \DateTime $transDate
     *
     * @return PhpposInventory
     */
    public function setTransDate($transDate)
    {
        $this->transDate = $transDate;

        return $this;
    }

    /**
     * Get transDate
     *
     * @return \DateTime
     */
    public function getTransDate()
    {
        return $this->transDate;
    }

    /**
     * Set transComment
     *
     * @param string $transComment
     *
     * @return PhpposInventory
     */
    public function setTransComment($transComment)
    {
        $this->transComment = $transComment;

        return $this;
    }

    /**
     * Get transComment
     *
     * @return string
     */
    public function getTransComment()
    {
        return $this->transComment;
    }

    /**
     * Set transInventory
     *
     * @param string $transInventory
     *
     * @return PhpposInventory
     */
    public function setTransInventory($transInventory)
    {
        $this->transInventory = $transInventory;

        return $this;
    }

    /**
     * Get transInventory
     *
     * @return string
     */
    public function getTransInventory()
    {
        return $this->transInventory;
    }

    /**
     * Get transId
     *
     * @return integer
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposInventory
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

    /**
     * Set transUser
     *
     * @param \principalBundle\Entity\PhpposEmployees $transUser
     *
     * @return PhpposInventory
     */
    public function setTransUser(\principalBundle\Entity\PhpposEmployees $transUser = null)
    {
        $this->transUser = $transUser;

        return $this;
    }

    /**
     * Get transUser
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getTransUser()
    {
        return $this->transUser;
    }

    /**
     * Set transItems
     *
     * @param \principalBundle\Entity\PhpposItems $transItems
     *
     * @return PhpposInventory
     */
    public function setTransItems(\principalBundle\Entity\PhpposItems $transItems = null)
    {
        $this->transItems = $transItems;

        return $this;
    }

    /**
     * Get transItems
     *
     * @return \principalBundle\Entity\PhpposItems
     */
    public function getTransItems()
    {
        return $this->transItems;
    }
}
