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
        $equipment->setDescription('Ceci est un Cable HDMI');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Cable VGA');
        $equipment->setDescription('Ceci est un Cable VGA');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Badge');
        $equipment->setDescription('Ceci est un badge');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Chariot');
        $equipment->setDescription('Ceci est un chariot');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Escabeau');
        $equipment->setDescription('Ceci est un escabeau');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Aspirateur');
        $equipment->setDescription('Ceci est un aspirateur');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Sonorisation portative');
        $equipment->setDescription('Ceci est une sonorisation portative');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
        $manager->persist($equipment);

        $equipment = new Equipment();
        $equipment->setName('Scene mobile');
        $equipment->setDescription('Ceci est une scene mobile');
        $equipment->setPicture(
            'https://i2.cdscdn.com/pdt2/5/q/s/1/700x700/
        samvcma15qs/rw/samsung-vcma15qs-aspirateur-traineau-sans-sac-15.jpg'
        );
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
