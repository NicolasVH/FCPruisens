<?php

namespace Fcp\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompetitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('season', 'text', array('label' => 'Naam'))
            ->add('competitionType', 'choice', array(
                            'choices' => array('season' => 'Seizoen', 'cup' => 'Beker')))
            ->add('fromDate')
            ->add('toDate')
            ->add('clubs')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fcp\SiteBundle\Entity\Competition'
        ));
    }

    public function getName()
    {
        return 'fcp_sitebundle_competitiontype';
    }
}
