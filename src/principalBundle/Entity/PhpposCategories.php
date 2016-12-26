<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposCategories
 *
 * @ORM\Table(name="phppos_categories", indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="phppos_categories_ibfk_1", columns={"parent_id"}), @ORM\Index(name="name_search", columns={"name"})})
 * @ORM\Entity
 */
class PhpposCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hide_from_grid", type="integer", nullable=false)
     */
    private $hideFromGrid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
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
     * @var \principalBundle\Entity\PhpposCategories
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;



    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposCategories
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
     * Set hideFromGrid
     *
     * @param integer $hideFromGrid
     *
     * @return PhpposCategories
     */
    public function setHideFromGrid($hideFromGrid)
    {
        $this->hideFromGrid = $hideFromGrid;

        return $this;
    }

    /**
     * Get hideFromGrid
     *
     * @return integer
     */
    public function getHideFromGrid()
    {
        return $this->hideFromGrid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PhpposCategories
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
     * Set parent
     *
     * @param \principalBundle\Entity\PhpposCategories $parent
     *
     * @return PhpposCategories
     */
    public function setParent(\principalBundle\Entity\PhpposCategories $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \principalBundle\Entity\PhpposCategories
     */
    public function getParent()
    {
        return $this->parent;
    }
}
