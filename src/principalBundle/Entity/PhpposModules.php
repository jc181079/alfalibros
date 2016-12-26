<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposModules
 *
 * @ORM\Table(name="phppos_modules", uniqueConstraints={@ORM\UniqueConstraint(name="desc_lang_key", columns={"desc_lang_key"}), @ORM\UniqueConstraint(name="name_lang_key", columns={"name_lang_key"})})
 * @ORM\Entity
 */
class PhpposModules
{
    /**
     * @var string
     *
     * @ORM\Column(name="name_lang_key", type="string", length=255, nullable=false)
     */
    private $nameLangKey;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_lang_key", type="string", length=255, nullable=false)
     */
    private $descLangKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="module_id", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moduleId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposEmployees", inversedBy="module")
     * @ORM\JoinTable(name="phppos_permissions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="module_id", referencedColumnName="module_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     *   }
     * )
     */
    private $person;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->person = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nameLangKey
     *
     * @param string $nameLangKey
     *
     * @return PhpposModules
     */
    public function setNameLangKey($nameLangKey)
    {
        $this->nameLangKey = $nameLangKey;

        return $this;
    }

    /**
     * Get nameLangKey
     *
     * @return string
     */
    public function getNameLangKey()
    {
        return $this->nameLangKey;
    }

    /**
     * Set descLangKey
     *
     * @param string $descLangKey
     *
     * @return PhpposModules
     */
    public function setDescLangKey($descLangKey)
    {
        $this->descLangKey = $descLangKey;

        return $this;
    }

    /**
     * Get descLangKey
     *
     * @return string
     */
    public function getDescLangKey()
    {
        return $this->descLangKey;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     *
     * @return PhpposModules
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return PhpposModules
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Get moduleId
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Add person
     *
     * @param \principalBundle\Entity\PhpposEmployees $person
     *
     * @return PhpposModules
     */
    public function addPerson(\principalBundle\Entity\PhpposEmployees $person)
    {
        $this->person[] = $person;

        return $this;
    }

    /**
     * Remove person
     *
     * @param \principalBundle\Entity\PhpposEmployees $person
     */
    public function removePerson(\principalBundle\Entity\PhpposEmployees $person)
    {
        $this->person->removeElement($person);
    }

    /**
     * Get person
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerson()
    {
        return $this->person;
    }
}
