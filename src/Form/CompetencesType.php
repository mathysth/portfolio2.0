<?php

namespace App\Form;

use App\Entity\Competences;
use App\Entity\CompetencesCategories;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompetencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('imageFile',FileType::class,[
                'required' => false
            ])
            ->add('niveauCompetence',RangeType::class,[
                "attr" => [
                    "min" => 1,
                    "max" => 100
                ]
            ])
            ->add('competencesCategories',EntityType::class,[
                "required" => true,
                "multiple" => true,
                "class" => CompetencesCategories::class,
                "choice_label" => "nom"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Competences::class,
        ]);
    }
}
