<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 26/06/18
 * Time: 10:21
 */

namespace AppBundle\Entity;


interface OrderInterface
{
    public function setOrder(int $order);
    public function getOrder();
}