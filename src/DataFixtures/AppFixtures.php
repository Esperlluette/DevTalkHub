<?php

namespace App\DataFixtures;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    // public function __construct(UserPasswordHasherInterface $hasher)
    // {
    //     $this->hasher = $hasher;
    // }
    public function load(ObjectManager $manager): void
    {

        // ERROR HERE FIX IT 

        
        // $admin_user = new User();
        // $admin_user->setName("admin");
        // $password = $this->hasher->hashPassword($admin_user, 'pass_1234');
        // $admin_user->setPassword($password);

        // $manager->persist($admin_user);

        // $manager->flush();
    }
}
