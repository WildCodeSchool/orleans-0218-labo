<?php
/**
 * Created by PhpStorm.
 * User: takne
 * Date: 30/05/18
 * Time: 16:40
 */

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Equipment;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $equipment = new Equipment();
        $equipment->setName('Cable HDMI');
        $equipment->setDescription('Ceci est un Cable HDMI');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Cable VGA');
        $equipment->setDescription('Ceci est un Cable VGA');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Badge');
        $equipment->setDescription('Ceci est un badge');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Chariot');
        $equipment->setDescription('Ceci est un chariot');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Escabeau');
        $equipment->setDescription('Ceci est un escabeau');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Aspirateur');
        $equipment->setDescription('Ceci est un aspirateur');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Sonorisation portative');
        $equipment->setDescription('Ceci est une sonorisation portative');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Scene mobile');
        $equipment->setDescription('Ceci est une scene mobile');
        $manager->persist($equipment);

        $manager->flush();
    }
}
