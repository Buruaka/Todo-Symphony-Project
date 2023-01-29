<?php

namespace App\Form;

use App\Entity\Tache;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '2',
                    'maxlength' => '50'
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label '
                ]
,])
            ->add('description',TextareaType::class, [
                'attr' => [
                    'class' => 'form-control ',
                    'minlength' => '2',
                    'maxlength' => '50'
                ],
                'label' => 'Description',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
,])
            ->add('Statut',ChoiceType::class,[
                'attr' => [
                    'class' => 'form-control '],
                    'choices'  => [
                        'à faire' => 0,
                        'en cours' => 1,
                        'terminé' => 2,
                    ],
                    'label_attr' => [
                        'class' => 'form-label mt-4'
                    ]
            ])

            ->add('date_de_fin',DateTimeType::class,[
                'attr' => [
                    'class' => 'form-control '],
                    'widget' => 'single_text',

                    'label_attr' => [
                        'class' => 'form-label mt-4'
                    ]
            ])
            ->add('photo',FileType::class,[
                'attr' => [
                    'class' => 'form-control'],
                'required'=> false,

                'label_attr' => [
                    'class' => 'form-label mt-4 '
                ]
            ])

            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ],
                'label' => 'Valider ma tâche'
            ]);
        
    }

 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}
