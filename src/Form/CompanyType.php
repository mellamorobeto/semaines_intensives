<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type',ChoiceType::class, array(
                'choices'  => array(
                    'Grande entrepries(GE)' => 'GE',
                    'Taille intémédiaire(ETI)' =>'ETI',
                    'Petite et Moyenne(PME)' => 'PME',
                    'Micro Entreprise(TPE)' => 'TPE',
                ),
            ))
            ->add('industries',ChoiceType::class, array(
                'choices'  => array(
                    'Pétrolière' => 'Pétrolière',
                    'Sidérurgie' =>'Sidérurgie',
                    'Textile' => 'Textile',
                    'Agro-Alimentaire' => 'Agro-Alimentaire',
                    'Pharmaceutique' =>'Pharmaceutique',
                    'Recyclage' => 'Recyclage',
                ),
            ))
            ->add('createdAt', DateTimeType::class, array(
                'placeholder' => array(
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                ),
            ))
            ->add('nameCompany')
            ->add('logo', FileType::class, array(
                'label' => 'Votre Logo : ',
                ))
            ->add('tel')
            ->add('mail')
            ->add('description')
            ->add('planete', ChoiceType::class, array(
                'choices'  => array(
                    'Nidavellir' => 'Nidavellir',
                    'Kamino' => 'Kamino' ,
                    'Alpha' => 'Alpha',
                    'Sakar' => 'Sakar',
                    'Xandar' => 'Xandar',
                    'Mustafar' => 'Mustafar',
                ),
            ))
            ->add('products',ChoiceType::class, array(
                'choices' => array(
                    'Nivadellir' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                    'Kamino' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                    'Alpha' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                    'Sakaar' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                    'Xandar' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                    'Mustafar' => array(
                        'Produit 1' => 'Produit 1',
                        'Produit 2' => 'Produit 2',
                        'Produit 3' => 'Produit 3',
                    ),
                ),
            ))
            ->add('materials',ChoiceType::class, array(
                'choices' => array(
                    'Nivadellir' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                    'Kamino' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                    'Alpha' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                    'Sakaar' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                    'Xandar' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                    'Mustafar' => array(
                        'Matériaux 1' => 'Matériaux 1',
                        'Matériaux 2' => 'Matériaux 2',
                    ),
                ),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Company::class,
            'numOfHoles' => 0,
        ));
    }


}
