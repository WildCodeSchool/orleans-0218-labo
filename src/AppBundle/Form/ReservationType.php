<?php

namespace AppBundle\Form;

use AppBundle\Entity\ReservationEquipment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstName')
        ->add('lastName')
        ->add('email')
        ->add('reservationEquipments', CollectionType::class, array(
            'entry_type'   => ReservationEquipmentType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true,
            'by_reference' => false,
        ));
    }

    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reservation';
    }
}
