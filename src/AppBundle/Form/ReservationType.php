<?php

namespace AppBundle\Form;

use AppBundle\Entity\Reservation;
use AppBundle\Entity\ReservationEquipment;
use AppBundle\Entity\Room;
use AppBundle\Repository\StaffRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Staff;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array('label'=> 'Prénom'))
            ->add('lastName', TextType::class, array('label'=> 'Nom'))
            ->add('email', EmailType::class, array('label'=> 'Email'))
            ->add('society', TextType::class, array('label'=> 'Société'))
            ->add(
                'reservationStart',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'required' => true,
                    'html5' => false,
                    'attr' => ['class' => 'flatpickr'],
                    'label' => 'Date d\'entrée',
                )
            )
            ->add(
                'reservationEnd',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'required' => true,
                    'html5' => false,
                    'attr' => ['class' => 'flatpickr'],
                    'label' => 'Date de sortie',
                )
            )
            ->add(
                'staff',
                EntityType::class,
                [
                    'class' => Staff::class,
                    'label' => 'Personnel d\'accueil',
                    'placeholder' => 'Choisir un membre du personnel',
                    'query_builder' => function (StaffRepository $sr) {
                        return $sr->createQueryBuilder('s')
                            ->orderBy('s.order', 'ASC');
                    },
                    'choice_label' => function ($reservation) {
                        return $reservation->getLastName() . ' ' . $reservation->getFirstName();
                    }
                ]
            )
            ->add(
                'reservationEquipments',
                CollectionType::class,
                [
                    'entry_type' => ReservationEquipmentType::class,

                ]
            )->add(
                'room',
                EntityType::class,
                [
                    'class' => Room::class,
                    'label' => ' ',
                    'choice_label' => 'name',
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false,
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
            'data_class' => Reservation::class
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reservation';
    }
}
