<?php

namespace MrsportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use MrsportBundle\Entity\Sports;


class ClubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('president')
            ->add('entraineur')
            ->add('fondation',DateType::class,array(
                'widget' => 'choice',
                'format' => 'y-M-d',
            ))
            ->add('couleur')
            ->add('stade')
            ->add('siteweb')
            ->add('sports',EntityType::class, array(
                'class' => Sports::class,
                // 'choice_label' => 'name',
                'multiple' => false,
                'expanded' => true,
                //'mapped' => false

                //'multiple' => true,

            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MrsportBundle\Entity\Club'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mrsportbundle_club';
    }


}
