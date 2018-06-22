<?php

namespace AppBundle\Form;

use AppBundle\Entity\Reservation;
use AppBundle\Entity\ReservationEquipment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Staff;

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
            ->add('society')
            ->add(
                'reservationStart',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'required' => true,
                    'html5' => false,
                    'attr' => ['class' => 'flatpickr'],
            ))
            ->add('reservationEnd',
                DateTimeType::class,
                array (
                    'widget' => 'single_text',
                    'required' => true,
                    'html5' => false,
                    'attr' => ['class' => 'flatpickr'],
                ))
            ->add('staff', EntityType::class, [
                'class' => Staff::class,
                'placeholder' => 'Choisir un membre du personnel',
                'choice_label' => function ($reservation) {

                    return $reservation->getLastName() . ' ' .$reservation->getFirstName();
                }
            ])
            ->add('reservationEquipments', CollectionType::class, ['entry_type' => ReservationEquipmentType::class]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Reservation::class
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
