<?php

namespace principalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhpposExpenses
 *
 * @ORM\Table(name="phppos_expenses", indexes={@ORM\Index(name="location_id", columns={"location_id"}), @ORM\Index(name="employee_id", columns={"employee_id"}), @ORM\Index(name="approved_employee_id", columns={"approved_employee_id"}), @ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="full_search", columns={"expense_type", "expense_description", "expense_reason", "expense_note"}), @ORM\Index(name="expense_type_search", columns={"expense_type"}), @ORM\Index(name="expense_description_search", columns={"expense_description"}), @ORM\Index(name="expense_reason_search", columns={"expense_reason"}), @ORM\Index(name="expense_note_search", columns={"expense_note"})})
 * @ORM\Entity
 */
class PhpposExpenses
{
    /**
     * @var string
     *
     * @ORM\Column(name="expense_type", type="string", length=255, nullable=false)
     */
    private $expenseType;

    /**
     * @var string
     *
     * @ORM\Column(name="expense_description", type="text", length=65535, nullable=true)
     */
    private $expenseDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="expense_reason", type="string", length=255, nullable=true)
     */
    private $expenseReason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expense_date", type="datetime", nullable=false)
     */
    private $expenseDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="expense_amount", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $expenseAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="expense_tax", type="decimal", precision=23, scale=10, nullable=false)
     */
    private $expenseTax;

    /**
     * @var string
     *
     * @ORM\Column(name="expense_note", type="string", length=255, nullable=true)
     */
    private $expenseNote;

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
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="approved_employee_id", referencedColumnName="person_id")
     * })
     */
    private $approvedEmployee;

    /**
     * @var \principalBundle\Entity\PhpposCategories
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \principalBundle\Entity\PhpposEmployees
     *
     * @ORM\ManyToOne(targetEntity="principalBundle\Entity\PhpposEmployees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="person_id")
     * })
     */
    private $employee;

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
     * Set expenseType
     *
     * @param string $expenseType
     *
     * @return PhpposExpenses
     */
    public function setExpenseType($expenseType)
    {
        $this->expenseType = $expenseType;

        return $this;
    }

    /**
     * Get expenseType
     *
     * @return string
     */
    public function getExpenseType()
    {
        return $this->expenseType;
    }

    /**
     * Set expenseDescription
     *
     * @param string $expenseDescription
     *
     * @return PhpposExpenses
     */
    public function setExpenseDescription($expenseDescription)
    {
        $this->expenseDescription = $expenseDescription;

        return $this;
    }

    /**
     * Get expenseDescription
     *
     * @return string
     */
    public function getExpenseDescription()
    {
        return $this->expenseDescription;
    }

    /**
     * Set expenseReason
     *
     * @param string $expenseReason
     *
     * @return PhpposExpenses
     */
    public function setExpenseReason($expenseReason)
    {
        $this->expenseReason = $expenseReason;

        return $this;
    }

    /**
     * Get expenseReason
     *
     * @return string
     */
    public function getExpenseReason()
    {
        return $this->expenseReason;
    }

    /**
     * Set expenseDate
     *
     * @param \DateTime $expenseDate
     *
     * @return PhpposExpenses
     */
    public function setExpenseDate($expenseDate)
    {
        $this->expenseDate = $expenseDate;

        return $this;
    }

    /**
     * Get expenseDate
     *
     * @return \DateTime
     */
    public function getExpenseDate()
    {
        return $this->expenseDate;
    }

    /**
     * Set expenseAmount
     *
     * @param string $expenseAmount
     *
     * @return PhpposExpenses
     */
    public function setExpenseAmount($expenseAmount)
    {
        $this->expenseAmount = $expenseAmount;

        return $this;
    }

    /**
     * Get expenseAmount
     *
     * @return string
     */
    public function getExpenseAmount()
    {
        return $this->expenseAmount;
    }

    /**
     * Set expenseTax
     *
     * @param string $expenseTax
     *
     * @return PhpposExpenses
     */
    public function setExpenseTax($expenseTax)
    {
        $this->expenseTax = $expenseTax;

        return $this;
    }

    /**
     * Get expenseTax
     *
     * @return string
     */
    public function getExpenseTax()
    {
        return $this->expenseTax;
    }

    /**
     * Set expenseNote
     *
     * @param string $expenseNote
     *
     * @return PhpposExpenses
     */
    public function setExpenseNote($expenseNote)
    {
        $this->expenseNote = $expenseNote;

        return $this;
    }

    /**
     * Get expenseNote
     *
     * @return string
     */
    public function getExpenseNote()
    {
        return $this->expenseNote;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return PhpposExpenses
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
     * Set approvedEmployee
     *
     * @param \principalBundle\Entity\PhpposEmployees $approvedEmployee
     *
     * @return PhpposExpenses
     */
    public function setApprovedEmployee(\principalBundle\Entity\PhpposEmployees $approvedEmployee = null)
    {
        $this->approvedEmployee = $approvedEmployee;

        return $this;
    }

    /**
     * Get approvedEmployee
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getApprovedEmployee()
    {
        return $this->approvedEmployee;
    }

    /**
     * Set category
     *
     * @param \principalBundle\Entity\PhpposCategories $category
     *
     * @return PhpposExpenses
     */
    public function setCategory(\principalBundle\Entity\PhpposCategories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \principalBundle\Entity\PhpposCategories
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set employee
     *
     * @param \principalBundle\Entity\PhpposEmployees $employee
     *
     * @return PhpposExpenses
     */
    public function setEmployee(\principalBundle\Entity\PhpposEmployees $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \principalBundle\Entity\PhpposEmployees
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set location
     *
     * @param \principalBundle\Entity\PhpposLocations $location
     *
     * @return PhpposExpenses
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
}
