<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du livre',
            ])
            ->add('auteur', TextType::class, [
                'label' => 'Auteur du livre',
            ])
            ->add('annee_publication', IntegerType::class, [
                'label' => 'Année de publication',
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du livre',
                'mapped' => false, // L'image n'est pas liée à l'entité Book directement
                'required' => false, // Ce champ est optionnel
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter le livre',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}