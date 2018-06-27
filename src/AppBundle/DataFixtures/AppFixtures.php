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
        $equipment->setName('Clef');
        $equipment->setDescription('Ceci est une clef');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(1);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Cable HDMI');
        $equipment->setDescription('La numérotation d\'un connecteur mâle, généralement monté sur un câble, 
        est symétrique. Un connecteur VGA est un connecteur de type D-sub, plus précisément DE-15. Il est utilisé pour 
        connecter une carte graphique à un écran d\'ordinateur en analogique. Ce connecteur est parfois appelé 
        connecteur RGB, HD-15 ou D-sub 15');
        $equipment->setPicture('https://zupimages.net/up/18/25/1odw.png');
        $equipment->setOrder(2);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Badge');
        $equipment->setDescription('Ceci est un badge');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(3);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Adaptateur VGA');
        $equipment->setDescription('Ceci est un Cable VGA');
        $equipment->setPicture('https://zupimages.net/up/18/25/ng32.png');
        $equipment->setOrder(4);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Ordinateur portable');
        $equipment->setDescription('Ceci est un ordinateur portable');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(5);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Microphone');
        $equipment->setDescription('Ceci est un microphone');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(6);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Clef du local technique');
        $equipment->setDescription('Ceci est une clef ouvrant le local technique');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(7);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Aspirateur');
        $equipment->setDescription('Ceci est un aspirateur');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(8);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Chariot');
        $equipment->setDescription('Ceci est un chariot');
        $equipment->setPicture('https://zupimages.net/up/18/25/xrk0.png');
        $equipment->setOrder(9);
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Plastifieuse');
        $equipment->setDescription('Ceci est une plastifieuse');
        $equipment->setPicture('https://zupimages.net/up/18/25/4yyj.png');
        $equipment->setOrder(10);
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
