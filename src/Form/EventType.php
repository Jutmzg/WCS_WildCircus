<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Event;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('type')
            ->add('description')
            ->add('place')
            ->add('date')
            ->add('img')
            ->add('artist', EntityType::class, [
                'class' => Artist::class,
                'choice_label' => 'name'
                ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
