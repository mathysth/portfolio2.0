<?php

namespace App\Form;

use App\Entity\Presentation;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PresentationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('age',DateTimeType::class,[
                'years' => range(date('Y')-20, date('Y')-1),
                'months' => range(date('m'), 12),
                'days' => range(date('d'), 31),
            ])
            ->add('job')
            ->add('nativeCountry')
            ->add('email')
            ->add('cv')
            ->add('presentationText',CKEditorType::class)
            ->add('coverLetter',CKEditorType::class)
            ->add('centerOfInterest',CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Presentation::class,
        ]);
    }
}
