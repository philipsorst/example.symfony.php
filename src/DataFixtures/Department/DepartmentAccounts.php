<?php

namespace App\DataFixtures\Department;

use App\Entity\Department;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * @author Philip Washington Sorst <philip@sorst.net>
 */
class DepartmentAccounts extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $department = new Department();
        $department->setName('Accounts');
        $manager->persist($department);
        $manager->flush();
        $this->addReference(self::class, $department);
    }
}
