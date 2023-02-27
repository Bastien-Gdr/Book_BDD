<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Ordre',TextType::class,[ 'label' => 'Ordre'])
            ->add('Auteur')
            ->add('Titre')
            ->add('Editeur')
            ->add('Poche')
            ->add('Annee')
            ->add('ISBN')
            ->add('Distinction')
            ->add('Collection')
            ->add('Numero')
            ->add('Tome')
            ->add('Cycle')
            ->add('Genre')
            ->add('SousGenre')
            ->add('NoteCath')
            ->add('NoteBruno')
            ->add('Commentaires')
            ->add('Nationalite')
            ->add('TitreOriginal')
            ->add('Date')
            ->add('Emprunteur')
            ->add('DateDebut')
            ->add('DateFin')
            ->add('Fiche')
            ->add('MotsClefs')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
        ]);
    }
}
