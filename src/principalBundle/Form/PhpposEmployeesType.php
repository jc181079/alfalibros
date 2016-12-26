<?php

namespace principalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhpposEmployeesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username')->add('password')->add('forcePasswordChange')->add('language')->add('commissionPercent')->add('commissionPercentType')->add('hourlyPayRate')->add('inactive')->add('reasonInactive')->add('hireDate')->add('employeeNumber')->add('birthday')->add('terminationDate')->add('deleted')->add('person')->add('module')->add('location')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'principalBundle\Entity\PhpposEmployees'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'principalbundle_phpposemployees';
    }


}
