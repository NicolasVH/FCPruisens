<?php

namespace Fcp\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('birthday', 'date', array(
                'years' => range(date('Y') - 100, date('Y') - 18)
               ))
            ->add('bioDescription')
            ->add('preferredNumber')
            ->add('preferredPosition', 'choice', array(
                       'choices' => array('keeper' => 'Doelman', 'defender' => 'Verdediger', 'midfielder' => 'Middenvelder', 'attacker' => 'Aanvaller')))
            ->add('image', 'file', array('data_class' => null))
            ->add('boardFunction')
            ->add('slug', 'hidden')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fcp\SiteBundle\Entity\Player'
        ));
    }

    public function getName()
    {
        return 'fcp_sitebundle_playertype';
    }
}
