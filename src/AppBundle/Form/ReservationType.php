<?php

namespace AppBundle\Form;

use AppBundle\Entity\Room;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
            ->add('reservationDate')
            ->add('email')
            ->add(
                'room',
                EntityType::class,
                [
                    'class' => Room::class,
                    'choice_label' => 'name',
                    'expanded' => true,
                    'multiple' => false
                ]
            )
            ->add('society')
            ->add('staff', EntityType::class, [
                'class' => Staff::class,
                'placeholder' => 'Choisir un membre du personnel',
                'choice_label' => function ($reservation) {

                    return $reservation->getLastName() . ' ' . $reservation->getFirstName();
                }
            ]);
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
