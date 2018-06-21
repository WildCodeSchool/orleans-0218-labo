<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 20/06/18
 * Time: 17:06
 */

namespace AppBundle\Service;


use AppBundle\Entity\Equipment;
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
    public function order()
    {
        $equipments = $this->em->getRepository(Equipment::class)->findby([], ['equipmentOrder' => 'ASC']);
        $i = 1;
        foreach ($equipments as $equipment) {
            $equipment->setEquipmentOrder($i++);
            $this->em->persist($equipment);
        }
        $this->em->flush();
    }

    public function up($equipment)
    {
        $equipmentDown = $this->em->getRepository(Equipment::class)->findOneBy(['equipmentOrder' => $equipment->getEquipmentOrder() - 1]);
        $equipmentDown->setEquipmentOrder($equipmentDown->getEquipmentOrder() + 1);
        $equipment->setEquipmentOrder($equipment->getEquipmentOrder() - 1);
        $this->em->flush();
    }

    public function down($equipment)
    {
        $equipmentUp = $this->em->getRepository(Equipment::class)->findOneBy(['equipmentOrder' => $equipment->getEquipmentOrder() + 1]);
        $equipmentUp->setEquipmentOrder($equipmentUp->getEquipmentOrder() - 1);
        $equipment->setEquipmentOrder($equipment->getEquipmentOrder() + 1);
        $this->em->flush();
    }
}