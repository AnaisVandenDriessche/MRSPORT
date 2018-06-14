<?php

namespace MrsportBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use MrsportBundle\Entity\Sports;

class EvenementsType extends AbstractType
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
            ->add('date')
            ->add('time')
            ->add('adresse',TextType::class, [
                "required" => true
            ])
            ->add('ville',TextType::class, [
                "required" => true
            ])
            ->add('description',TextareaType::class, [
                "required" => true
            ])
            ->add('sports',EntityType::class, array(
                'class' => Sports::class,
                // 'choice_label' => 'name',
                'multiple' => false,
                'expanded' => true,
            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MrsportBundle\Entity\Evenements'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mrsportbundle_evenements';
    }


}
