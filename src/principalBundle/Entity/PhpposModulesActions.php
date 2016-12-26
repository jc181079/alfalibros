<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposModulesActions
 *
 * @ORM\Table(name="phppos_modules_actions", indexes={@ORM\Index(name="phppos_modules_actions_ibfk_1", columns={"module_id"})})
 * @ORM\Entity
 */
class PhpposModulesActions
{
    /**
     * @var string
     *
     * @ORM\Column(name="action_name_key", type="string", length=100, nullable=false)
     */
    private $actionNameKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="action_id", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $actionId;

    /**
     * @var \principalBundle\Entity\PhpposModules
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposModules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_id", referencedColumnName="module_id")
     * })
     */
    private $module;



    /**
     * Set actionNameKey
     *
     * @param string $actionNameKey
     *
     * @return PhpposModulesActions
     */
    public function setActionNameKey($actionNameKey)
    {
        $this->actionNameKey = $actionNameKey;

        return $this;
    }

    /**
     * Get actionNameKey
     *
     * @return string
     */
    public function getActionNameKey()
    {
        return $this->actionNameKey;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     *
     * @return PhpposModulesActions
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
     * Set actionId
     *
     * @param string $actionId
     *
     * @return PhpposModulesActions
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;

        return $this;
    }

    /**
     * Get actionId
     *
     * @return string
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Set module
     *
     * @param \principalBundle\Entity\PhpposModules $module
     *
     * @return PhpposModulesActions
     */
    public function setModule(\principalBundle\Entity\PhpposModules $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \principalBundle\Entity\PhpposModules
     */
    public function getModule()
    {
        return $this->module;
    }
}
