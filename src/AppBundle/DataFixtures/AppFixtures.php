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
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Cable VGA');
        $equipment->setDescription('Ceci est un Cable VGA');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Badge');
        $equipment->setDescription('Ceci est un badge');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Chariot');
        $equipment->setDescription('Ceci est un chariot');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Escabeau');
        $equipment->setDescription('Ceci est un escabeau');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Aspirateur');
        $equipment->setDescription('Ceci est un aspirateur');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Sonorisation portative');
        $equipment->setDescription('Ceci est une sonorisation portative');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Scene mobile');
        $equipment->setDescription('Ceci est une scene mobile');
        $equipment->setPicture('https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg');
        $manager->persist($equipment);

        $manager->flush();
    }
}
