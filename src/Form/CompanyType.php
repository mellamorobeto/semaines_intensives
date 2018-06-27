<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type',ChoiceType::class, array(
                'choices'  => array(
                    'Grande entrepries(GE)' => true,
                    'Taille intémédiaire(ETI)' => true,
                    'Petite et Moyenne(PME)' => true,
                    'Micro Entreprise(TPE)' => true,
                ),
            ))
            ->add('createdAt')
            ->add('nameCompany')
            ->add('logo', FileType::class, array('label' => 'inserer une image'))
            ->add('tel')
            ->add('mail')
            ->add('description')
            ->add('planete',ChoiceType::class, array(
                'choices'  => array(
                    'Nidavellir' => true,
                    'Kamino' => true,
                    'Alpha' => true,
                    'Sakar' => true,
                    'Xandar' => true,
                    'Mustafar' => true,
                ),
            ))
            ->add('products',ChoiceType::class, array(
                'choices' => array(
                    'Nivadellir' => array(
                        'Produit 1' => 'stock_yes',
                        'Produit 2' => 'stock_no',
                        'Produit 3' => 'stock_no',
                    ),
                    'Kamino' => array(
                        'Produit 1' => 'stock_backordered',
                        'Produit 2' => 'stock_discontinued',
                        'Produit 3' => 'stock_no',
                    ),
                    'Alpha' => array(
                        'Produit 1' => 'stock_yes',
                        'Produit 2' => 'stock_no',
                        'Produit 3' => 'stock_no',
                    ),
                    'Sakaar' => array(
                        'Produit 1' => 'stock_backordered',
                        'Produit 2' => 'stock_discontinued',
                        'Produit 3' => 'stock_no',
                    ),
                    'Xandar' => array(
                        'Produit 1' => 'stock_yes',
                        'Produit 2' => 'stock_no',
                        'Produit 3' => 'stock_no',
                    ),
                    'Mustafar' => array(
                        'Produit 1' => 'stock_backordered',
                        'Produit 2' => 'stock_discontinued',
                        'Produit 3' => 'stock_no',
                    ),
                ),
            ))
            ->add('materials',ChoiceType::class, array(
                'choices' => array(
                    'Nivadellir' => array(
                        'Matériaux 1' => 'stock_yes',
                        'Matériaux 2' => 'stock_no',
                    ),
                    'Kamino' => array(
                        'Matériaux 1' => 'stock_backordered',
                        'Matériaux 2' => 'stock_discontinued',
                    ),
                    'Alpha' => array(
                        'Matériaux 1' => 'stock_yes',
                        'Matériaux 2' => 'stock_no',
                    ),
                    'Sakaar' => array(
                        'Matériaux 1' => 'stock_backordered',
                        'Matériaux 2' => 'stock_discontinued',
                    ),
                    'Xandar' => array(
                        'Matériaux 1' => 'stock_yes',
                        'Matériaux 2' => 'stock_no',
                    ),
                    'Mustafar' => array(
                        'Matériaux 1' => 'stock_backordered',
                        'Matériaux 2' => 'stock_discontinued',
                    ),
                ),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }


}
