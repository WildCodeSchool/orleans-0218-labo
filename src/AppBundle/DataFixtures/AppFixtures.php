<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 30/05/18
 * Time: 16:24
 */

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
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
        $staff->setLastName('FORSECA');
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
