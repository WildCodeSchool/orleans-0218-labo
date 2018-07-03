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
    public function add(string $signature)
    {
        if (!empty($signature)) {
            $path = 'images/signatures/' . uniqid('sign_') . ".png";
            file_put_contents($path, file_get_contents($signature));
        }
        return $path;
    }

    public function delete($path)
    {
        if (!empty($path)) {
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }
}

