<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setEmail('admin@free.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            '1239free'
        ));
        $manager->persist($admin);
        $manager->flush();

        $admin = new User();
        $admin->setEmail('jfillion@free.fr');
        $admin->setRoles(['ROLE_USER']);
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            '1239free'
        ));
        $manager->persist($admin);
        $manager->flush();
    }
}