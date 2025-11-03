<?php

namespace App\Form;

use App\Entity\Equipment;
use App\Entity\Place;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => 'test', 'placeholder' => 'Nom du lieu'],
                'help' => 'Saisissez le nom de votre location'
            ])
            ->add('capacity', IntegerType::class, [
                'label' => 'Capacité',
                'attr' => ['class' => 'test', 'placeholder' => 'Capacité de la location'],
                'help' => 'Saisissez la capacité de la location'
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'attr' => ['class' => 'test', 'placeholder' => 'Adresse de la location'],
                'help' => "Saisissez l'adresse de la location"
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'test', 'placeholder' => 'Description de la location'],
                'help' => 'Saisissez la description de la location'
            ])
            ->add('equipments', EntityType::class, [
                'class' => Equipment::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Place::class,
        ]);
    }
}
