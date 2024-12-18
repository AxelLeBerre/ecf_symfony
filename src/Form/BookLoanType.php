<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\BookLoan;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookLoanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_emprunt', null, [
                'widget' => 'single_text'
            ])
            ->add('date_retour_prevue', null, [
                'widget' => 'single_text'
            ])
            ->add('extension_utilisee')
            
            ->add('book', EntityType::class, [
                'class' => Book::class,
                'choice_label' => 'titre',
                'placeholder' => 'Sélectionnez un livre',
                'label' => 'titre',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BookLoan::class,
        ]);
    }
}
