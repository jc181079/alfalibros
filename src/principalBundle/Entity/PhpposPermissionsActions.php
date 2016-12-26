<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposPermissionsActions
 *
 * @ORM\Table(name="phppos_permissions_actions", indexes={@ORM\Index(name="phppos_permissions_actions_ibfk_2", columns={"person_id"}), @ORM\Index(name="phppos_permissions_actions_ibfk_3", columns={"action_id"}), @ORM\Index(name="IDX_9649CBD0AFC2B591", columns={"module_id"})})
 * @ORM\Entity
 */
class PhpposPermissionsActions
{
    /**
     * @var \principalBundle\Entity\PhpposModulesActions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposModulesActions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_id", referencedColumnName="action_id")
     * })
     */
    private $action;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     * })
     */
    private $person;

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
     * Set action
     *
     * @param \principalBundle\Entity\PhpposModulesActions $action
     *
     * @return PhpposPermissionsActions
     */
    public function setAction(\principalBundle\Entity\PhpposModulesActions $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return \principalBundle\Entity\PhpposModulesActions
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set person
     *
     * @param \principalBundle\Entity\PhpposEmployees $person
     *
     * @return PhpposPermissionsActions
     */
    public function setPerson(\principalBundle\Entity\PhpposEmployees $person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set module
     *
     * @param \principalBundle\Entity\PhpposModules $module
     *
     * @return PhpposPermissionsActions
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
