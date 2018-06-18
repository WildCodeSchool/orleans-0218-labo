<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationEquipmentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reservationStart')
            ->add('reservationEnd')
            ->add('equipment', EntityType::class, array(
                'class' => 'AppBundle:Equipment',
                'choice_label' => 'name',
            ))
            ->add('quantity')
            ->add('reservation', EntityType::class, array(
                'class' => 'AppBundle:Reservation',
                'choice_label' => 'id',
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ReservationEquipment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reservationequipment';
    }


}
