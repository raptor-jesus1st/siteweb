<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
 
class AppFixtures extends Fixture
{
    
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@mediaforce.com');
        $user->setPassword($this->encoder->encodePassword($user,'some'));
        $manager->persist($user);
 
        $manager->flush();
    }
}

