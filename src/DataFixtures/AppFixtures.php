<?php

namespace App\DataFixtures;

use App\Entity\Location;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $location = new Location();
            $location->setCompanyName($faker->company_name);
            $location->setLatitude($faker->latitude);
            $location->setLongitude($faker->longitude);

            $manager->persist($location);
        }
        $manager->flush();
    }
}
