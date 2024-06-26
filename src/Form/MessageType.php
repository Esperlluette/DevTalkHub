<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Messages;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name', // Remplacez 'name' par le champ de la catégorie que vous souhaitez afficher dans le sélecteur
                'placeholder' => 'Choisir une catégorie', // Message optionnel à afficher au-dessus du sélecteur

            ])
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}
