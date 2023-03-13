<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Ordre',IntegerType::class, ['label'=>'Ordre'])
            ->add('Auteur',TextType::class, ['label'=>'Auteur'])
            ->add('Titre',TextType::class, ['label'=>'Titre'])
            ->add('Editeur',TextType::class, ['label'=>'Titre'])
            ->add('Poche')
            ->add('Annee',IntegerType::class, ['label'=>'Année'])
            ->add('ISBN',IntegerType::class, ['label'=>'ISBN'])
            ->add('Distinction',TextType::class, ['label'=>'Distinction'])
            ->add('Collection',TextType::class, ['label'=>'Collection'])
            ->add('Numero',IntegerType::class, ['label'=>'Numéro'])
            ->add('Tome',IntegerType::class, ['label'=>'Tome'])
            ->add('Cycle',TextType::class, ['label'=>'Cycle'])
            ->add('Genre',TextType::class, ['label'=>'Genre'])
            ->add('SousGenre',TextType::class, ['label'=>'Sous-genre'])
            ->add('NoteCath',TextareaType::class, ['label'=>'Notes de Cath'])
            ->add('NoteBruno',TextareaType::class, ['label'=>'Notes de Bruno'])
            ->add('Commentaires',TextareaType::class, ['label'=>'Commentaires'])
            ->add('Nationalite',TextType::class, ['label'=>'Nationalité'])
            ->add('TitreOriginal',TextType::class, ['label'=>'Titre original'])
            ->add('Date',IntegerType::class, ['label'=>'Date'])
            ->add('Emprunteur',TextType::class, ['label'=>'Nom de l\'emprunteur'])
            ->add('DateDebut',DateTimeType::class, ['label'=>'Date de début du prêt'])
            ->add('DateFin',DateTimeType::class, ['label'=>'Date de fin du prêt'])
            ->add('Fiche',TextareaType::class, ['label'=>'Fiche'])
            ->add('MotsClefs',TextareaType::class, ['label'=>'Mots-clés'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
        ]);
    }
}
