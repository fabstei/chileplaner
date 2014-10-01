<?php

namespace Chileplaner\ChileplanerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start')
            ->add('end')
            ->add('recur')
            ->add('recurEnd')
            ->add('title')
            ->add('privateDescription')
            ->add('createdOn')
            ->add('updatedOn')
            ->add('type')
            ->add('preparationTime')
            ->add('cleaningTime')
            ->add('publicDescription')
            ->add('updatedBy')
            ->add('responsiblePerson')
            ->add('createdBy')
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chileplaner\ChileplanerBundle\Entity\Events'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chileplaner_chileplanerbundle_events';
    }
}
