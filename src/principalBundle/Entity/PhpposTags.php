<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposTags
 *
 * @ORM\Table(name="phppos_tags", uniqueConstraints={@ORM\UniqueConstraint(name="tag_name", columns={"name"})}, indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="name_search", columns={"name"})})
 * @ORM\Entity
 */
class PhpposTags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItems", mappedBy="tag")
     */
    private $item;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposItemKits", mappedBy="tag")
     */
    private $itemKit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->item = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemKit = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposTags
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
     * Set name
     *
     * @param string $name
     *
     * @return PhpposTags
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     *
     * @return PhpposTags
     */
    public function addItem(\principalBundle\Entity\PhpposItems $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \principalBundle\Entity\PhpposItems $item
     */
    public function removeItem(\principalBundle\Entity\PhpposItems $item)
    {
        $this->item->removeElement($item);
    }

    /**
     * Get item
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Add itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     *
     * @return PhpposTags
     */
    public function addItemKit(\principalBundle\Entity\PhpposItemKits $itemKit)
    {
        $this->itemKit[] = $itemKit;

        return $this;
    }

    /**
     * Remove itemKit
     *
     * @param \principalBundle\Entity\PhpposItemKits $itemKit
     */
    public function removeItemKit(\principalBundle\Entity\PhpposItemKits $itemKit)
    {
        $this->itemKit->removeElement($itemKit);
    }

    /**
     * Get itemKit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemKit()
    {
        return $this->itemKit;
    }
}
