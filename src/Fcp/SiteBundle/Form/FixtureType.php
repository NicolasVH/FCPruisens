<?php

namespace Fcp\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fcp\SiteBundle\Form\GoalscorerType;

class FixtureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('competition')
            ->add('homeTeam')
            ->add('awayTeam')
            ->add('location')
            ->add('scheduledDate', 'date', array(
                'years' => range(date('Y') - 1, date('Y') + 2)
               ))
            ->add('homeScore')
            ->add('awayScore')
            ->add('refereeName')
            ->add('reportArticle')
            ->add('yellowCarded')
            ->add('redCarded')
        ;
        
        $builder->add('goalScorers', 'collection', array(
            'type' => new GoalscorerType(),
            'allow_add'    => true,
            'allow_delete' => true,
            'by_reference' => false,
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fcp\SiteBundle\Entity\Fixture'
        ));
    }

    public function getName()
    {
        return 'fcp_sitebundle_fixturetype';
    }
}
