<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 01/07/18
 * Time: 10:05
 */

namespace AppBundle\Service;


use AppBundle\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class SignatureService
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function add(Reservation $reservation, Request $request)
    {
        if (!empty($request->request->get('signature')['signature'])) {
            $signature = 'images/signatures/' . uniqid('sign_') . ".png";
            file_put_contents($signature, file_get_contents($request->request->get('signature')['signature']));
            $reservation->setSignature($signature);
            $this->em->flush();
        }
    }

    public function delete(Reservation $reservation)
    {
        $path = $reservation->getSignature();
        if(!empty($path)) {
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

}