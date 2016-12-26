<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposEmployees
 *
 * @ORM\Table(name="phppos_employees", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"}), @ORM\UniqueConstraint(name="employee_number", columns={"employee_number"})}, indexes={@ORM\Index(name="person_id", columns={"person_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="username_search", columns={"username"})})
 * @ORM\Entity
 */
class PhpposEmployees
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="force_password_change", type="integer", nullable=false)
     */
    private $forcePasswordChange = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="commission_percent", type="decimal", precision=23, scale=10, nullable=true)
     */
    private $commissionPercent = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="commission_percent_type", type="string", length=255, nullable=true)
     */
    private $commissionPercentType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hourly_pay_rate", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $hourlyPayRate = '0.0000000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="inactive", type="integer", nullable=false)
     */
    private $inactive = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reason_inactive", type="text", length=65535, nullable=true)
     */
    private $reasonInactive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hire_date", type="date", nullable=true)
     */
    private $hireDate;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_number", type="string", length=255, nullable=true)
     */
    private $employeeNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="termination_date", type="date", nullable=true)
     */
    private $terminationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \principalBundle\Entity\PhpposPeople
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposPeople")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     * })
     */
    private $person;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposModules", mappedBy="person")
     */
    private $module;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="principalBundle\Entity\PhpposLocations", inversedBy="employee")
     * @ORM\JoinTable(name="phppos_employees_locations",
     *   joinColumns={
     *     @ORM\JoinColumn(name="employee_id", referencedColumnName="person_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="location_id", referencedColumnName="location_id")
     *   }
     * )
     */
    private $location;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->module = new \Doctrine\Common\Collections\ArrayCollection();
        $this->location = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return PhpposEmployees
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return PhpposEmployees
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set forcePasswordChange
     *
     * @param integer $forcePasswordChange
     *
     * @return PhpposEmployees
     */
    public function setForcePasswordChange($forcePasswordChange)
    {
        $this->forcePasswordChange = $forcePasswordChange;

        return $this;
    }

    /**
     * Get forcePasswordChange
     *
     * @return integer
     */
    public function getForcePasswordChange()
    {
        return $this->forcePasswordChange;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return PhpposEmployees
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set commissionPercent
     *
     * @param string $commissionPercent
     *
     * @return PhpposEmployees
     */
    public function setCommissionPercent($commissionPercent)
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Get commissionPercent
     *
     * @return string
     */
    public function getCommissionPercent()
    {
        return $this->commissionPercent;
    }

    /**
     * Set commissionPercentType
     *
     * @param string $commissionPercentType
     *
     * @return PhpposEmployees
     */
    public function setCommissionPercentType($commissionPercentType)
    {
        $this->commissionPercentType = $commissionPercentType;

        return $this;
    }

    /**
     * Get commissionPercentType
     *
     * @return string
     */
    public function getCommissionPercentType()
    {
        return $this->commissionPercentType;
    }

    /**
     * Set hourlyPayRate
     *
     * @param string $hourlyPayRate
     *
     * @return PhpposEmployees
     */
    public function setHourlyPayRate($hourlyPayRate)
    {
        $this->hourlyPayRate = $hourlyPayRate;

        return $this;
    }

    /**
     * Get hourlyPayRate
     *
     * @return string
     */
    public function getHourlyPayRate()
    {
        return $this->hourlyPayRate;
    }

    /**
     * Set inactive
     *
     * @param integer $inactive
     *
     * @return PhpposEmployees
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;

        return $this;
    }

    /**
     * Get inactive
     *
     * @return integer
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Set reasonInactive
     *
     * @param string $reasonInactive
     *
     * @return PhpposEmployees
     */
    public function setReasonInactive($reasonInactive)
    {
        $this->reasonInactive = $reasonInactive;

        return $this;
    }

    /**
     * Get reasonInactive
     *
     * @return string
     */
    public function getReasonInactive()
    {
        return $this->reasonInactive;
    }

    /**
     * Set hireDate
     *
     * @param \DateTime $hireDate
     *
     * @return PhpposEmployees
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    /**
     * Get hireDate
     *
     * @return \DateTime
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Set employeeNumber
     *
     * @param string $employeeNumber
     *
     * @return PhpposEmployees
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;

        return $this;
    }

    /**
     * Get employeeNumber
     *
     * @return string
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return PhpposEmployees
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set terminationDate
     *
     * @param \DateTime $terminationDate
     *
     * @return PhpposEmployees
     */
    public function setTerminationDate($terminationDate)
    {
        $this->terminationDate = $terminationDate;

        return $this;
    }

    /**
     * Get terminationDate
     *
     * @return \DateTime
     */
    public function getTerminationDate()
    {
        return $this->terminationDate;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposEmployees
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set person
     *
     * @param \principalBundle\Entity\PhpposPeople $person
     *
     * @return PhpposEmployees
     */
    public function setPerson(\principalBundle\Entity\PhpposPeople $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \principalBundle\Entity\PhpposPeople
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Add module
     *
     * @param \principalBundle\Entity\PhpposModules $module
     *
     * @return PhpposEmployees
     */
    public function addModule(\principalBundle\Entity\PhpposModules $module)
    {
        $this->module[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \principalBundle\Entity\PhpposModules $module
     */
    public function removeModule(\principalBundle\Entity\PhpposModules $module)
    {
        $this->module->removeElement($module);
    }

    /**
     * Get module
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Add location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposEmployees
     */
    public function addLocation(\principalBundle\Entity\PhpposLocations $location)
    {
        $this->location[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     */
    public function removeLocation(\principalBundle\Entity\PhpposLocations $location)
    {
        $this->location->removeElement($location);
    }

    /**
     * Get location
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocation()
    {
        return $this->location;
    }
}
