<?php
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 03/07/18
 * Time: 15:47
 */

namespace AppBundle\Service;

use AppBundle\Entity\OrderInterface;
use AppBundle\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\ReversedTransformer;

class DateDisplayOptionService
{

    public function isAvailable(Reservation $reservation)
    {
        $open =  (int) ($reservation->getReservationStart()->format('H'));
        $close =  (int) ($reservation->getReservationEnd()->format('H'));

        if (($open <= Reservation::OPEN_OFFICE) or ($open >= Reservation::END_OFFICE)
            or ($close <= Reservation::OPEN_OFFICE) or ($close >= Reservation::END_OFFICE)) {
            return true;
        } else {
            return false;
        }
    }
}
