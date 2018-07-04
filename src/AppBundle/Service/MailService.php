<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 04/07/18
 * Time: 09:56
 */

namespace AppBundle\Service;

use AppBundle\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;

class MailService
{
    private $em;
    private $mailer;
    private $templating;
    private $sender;

    public function __construct(EntityManagerInterface $em, \Swift_Mailer $mailer, \Twig_Environment $templating, $sender)
    {
        $this->em = $em;
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->sender = $sender;
    }

    public function sendAll()
    {
        $reservations = $this->em->getRepository(Reservation::class)->findBy(['reservationOver' => false]);
        $dateNow = new \DateTime();

        foreach ($reservations as $reservation) {
            if ($reservation->getSignature() != null &&
                $reservation->getReservationEnd()->add(new \DateInterval('PT24H')) <= $dateNow) {
                $this->send($reservation->getEMail(), $reservation);
            }
        }
    }

    public function send($mail, $reservation)
    {
        $body = $this->templating->render('mail/retard.html.twig', ['reservation' => $reservation]);

        $message = (new \Swift_Message('Réservation Labo'))
            ->setFrom($this->sender)
            ->setTo($mail)
            ->setBody($body, 'text/html');
        $this->mailer->send($message);
    }
}