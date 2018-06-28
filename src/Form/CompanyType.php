<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
?>
<div class="formcontainer">
    <?php
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
                'attr' => array(
                    'class' => 'type'
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
                'attr' => array(
                    'class' => 'industries'
                ),
            ))
            ->add('nameCompany')
            ->add('logo', FileType::class, array(
                'label' => 'Votre Logo : ',
                'data_class' => null, 
                'attr' => array(
                    'name' => 'logo',
                ),
                ))
            ->add('tel')
            ->add('mail')
            ->add('description', TextareaType::class,array(
                'attr' => array(
                    'class' => 'desc'
                ),
            ))
            ->add('planete', ChoiceType::class, array(
                'choices'  => array(
                    'Nidavellir' => 'Nidavellir',
                    'Kamino' => 'Kamino' ,
                    'Alpha' => 'Alpha',
                    'Sakar' => 'Sakar',
                    'Xandar' => 'Xandar',
                    'Mustafar' => 'Mustafar',
                ),
                'attr' => array(
                    'class' => 'planete'
                ),
            ))
            ->add('products',ChoiceType::class, array(
                'multiple' => false,
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
                
            ->add('materials', ChoiceType::class, array(
                'multiple' => false ,
                'choices' => array(
                    'Nivadellir' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
                    ),
                    'Kamino' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
                    ),
                    'Alpha' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
                    ),
                    'Sakaar' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
                    ),
                    'Xandar' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
                    ),
                    'Mustafar' => array(
                        'Materiaux 1' => 'Materiaux 1',
                        'Materiaux 2' => 'Materiaux 2',
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
?>

</div>
