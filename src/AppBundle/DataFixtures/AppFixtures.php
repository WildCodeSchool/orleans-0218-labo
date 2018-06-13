<?php
/**
 * Created by PhpStorm.
 */

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Equipment;
use AppBundle\Entity\Room;
use AppBundle\Entity\Staff;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $staff = new Staff();
        $staff->setFirstName('Julie');
        $staff->setLastName('VAILLANT');
        $manager->persist($staff);

        $staff = new Staff();
        $staff->setFirstName('Cynthia');
        $staff->setLastName('FONSECA');
        $manager->persist($staff);

        $staff = new Staff();
        $staff->setFirstName('Pauline');
        $staff->setLastName('BOULAS');
        $manager->persist($staff);

        $staff = new Staff();
        $staff->setFirstName('Ludovic');
        $staff->setLastName('COURTOIS');
        $manager->persist($staff);

        $staff = new Staff();
        $staff->setFirstName('Sylvie');
        $staff->setLastName('PARFUM');
        $manager->persist($staff);

        $equipment = new Equipment();
        $equipment->setName('Cable HDMI');
        $equipment->setDescription('La numérotation d\'un connecteur mâle, généralement monté sur un câble, 
        est symétrique. Un connecteur VGA est un connecteur de type D-sub, plus précisément DE-15. Il est utilisé pour 
        connecter une carte graphique à un écran d\'ordinateur en analogique. Ce connecteur est parfois appelé 
        connecteur RGB, HD-15 ou D-sub 15');
        $equipment->setPicture('https://images-na.ssl-images-amazon.com/images/I/81kz%2BIy9YwL._SX679_.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Cable VGA');
        $equipment->setDescription('Ceci est un Cable VGA');
        $equipment->setPicture('https://images-na.ssl-images-amazon.com/images/I/41-pTAb-q1L.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Badge');
        $equipment->setDescription('Ceci est un badge');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Chariot');
        $equipment->setDescription('Ceci est un chariot');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Escabeau');
        $equipment->setDescription('Ceci est un escabeau');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Aspirateur');
        $equipment->setDescription('Ceci est un aspirateur');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Sonorisation portative');
        $equipment->setDescription('Ceci est une sonorisation portative');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Scene mobile');
        $equipment->setDescription('Ceci est une scene mobile');
        $equipment->setPicture('http://www.aspirateur.free.fr/images/
        Aspirateur-Silencieux-Rowenta-Silence-Force-RO472311.jpg');
        $manager->persist($equipment);

        $room = new Room();
        $room->setName('Showroom');
        $room->setDoors(0);
        $manager->persist($room);

        $room = new Room();
        $room->setName('Délirium');
        $room->setDoors(0);
        $manager->persist($room);

        $room = new Room();
        $room->setName('Fabrique');
        $room->setDoors(0);
        $manager->persist($room);

        $room = new Room();
        $room->setName('Hub 1');
        $room->setDoors(0);
        $manager->persist($room);

        $room = new Room();
        $room->setName('Hub 2');
        $room->setDoors(0);
        $manager->persist($room);

        $room = new Room();
        $room->setName('Cocon');
        $room->setDoors(0);
        $manager->persist($room);

        $manager->flush();
    }
}
