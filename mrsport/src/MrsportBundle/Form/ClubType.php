<?php

namespace MrsportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 

use MrsportBundle\Entity\Sports;


class ClubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                "required" => true
            ])
            ->add('president', TextType::class, [
                "required" => true
            ])
            ->add('entraineur', TextType::class, [
                "required" => true
            ])
            ->add('fondation',DateType::class,array(
                'widget' => 'choice',
                'format' => 'y-M-d',
            ))
            ->add('couleur', TextType::class, [
                "required" => true
            ])
            ->add('stade', TextType::class, [
                "required" => true
            ])
            ->add('siteweb', TextType::class, [
                "required" => true
            ])
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
