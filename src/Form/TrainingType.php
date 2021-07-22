<?php

namespace App\Form;

use App\Entity\Training;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TrainingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextareaType::class, array(
            'disabled' => true,
        ))
        ->add('content', TextareaType::class, array(
            'disabled' => true,
        ))
        ->add('duration', TextareaType::class, array(
            'disabled' => true,
        ))
        ->add('spots', TextareaType::class, array(
            'disabled' => true,
        ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Training::class,
        ]);
    }
}
