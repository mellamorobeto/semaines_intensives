<?php

namespace App\Form;

use App\Entity\Website;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class WebsiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, array(
                'choices'  => array(
                    'Nidavellir' => 'Nidavellir',
                    'Kamino' => 'Kamino' ,
                    'Alpha' => 'Alpha',
                    'Sakar' => 'Sakar',
                    'Xandar' => 'Xandar',
                    'Mustafar' => 'Mustafar',
                ),
            ))
            ->add('statut', HiddenType::class, array(
                    'required'   => false,
                    'empty_data' => 'En cours',
            ))
            ->add('industrie',ChoiceType::class, array(
                'choices'  => array(
                    'Pétrolière' => 'Pétrolière',
                    'Sidérurgie' =>'Sidérurgie',
                    'Textile' => 'Textile',
                    'Agro-Alimentaire' => 'Agro-Alimentaire',
                    'Pharmaceutique' =>'Pharmaceutique',
                    'Recyclage' => 'Recyclage',
                ),
            ))
            ->add('company')
            ->add('createdAt', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Website::class,
        ]);
    }
}



