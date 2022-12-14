<?php

namespace App\Form;


use App\Entity\Restaurateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RestaurateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,['label' =>'le nom :'])
            ->add('prenom',TextType::class,['label' =>'le prenom :'])
            ->add('email',TextType::class,['label' =>'email :'])
            ->add('mot_de_passe',TextType::class,['label' =>'mot de passe :'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurateur::class,
        ]);
    }
}
