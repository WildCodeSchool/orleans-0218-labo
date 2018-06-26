<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 20/06/18
 * Time: 17:06
 */

namespace AppBundle\Service;

use AppBundle\Entity\Equipment;
use AppBundle\Entity\OrderInterface;
use Doctrine\ORM\EntityManagerInterface;

class OrderService
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     *Order an equipment list from 1 to n
     */
    public function order($className)
    {
        $items = $this->em->getRepository($className)->findby([], ['order' => 'ASC']);
        $i = 1;
        foreach ($items as $item) {
            $item->setOrder($i++);
            $this->em->persist($item);
        }
        $this->em->flush();
    }

    public function up(OrderInterface $item)
    {
        $itemDown = $this->em->getRepository(get_class($item))->findOneBy([
            'order' => $item->getOrder() - 1]);
        $itemDown->setOrder($itemDown->getOrder() + 1);
        $item->setOrder($item->getOrder() - 1);
        $this->em->flush();
    }

    public function down(OrderInterface $item)
    {
        $itemUp = $this->em->getRepository(get_class($item))->findOneBy([
            'order' => $item->getOrder() + 1]);
        $itemUp->setOrder($itemUp->getOrder() - 1);
        $item->setOrder($item->getOrder() + 1);
        $this->em->flush();
    }
}
