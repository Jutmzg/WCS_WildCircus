<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-07-17
 * Time: 15:12
 */

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
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
         $visitor = new User();
         $visitor->setEmail('visitor@monsite.com');
         $visitor->setRoles(['ROLE_AUTHOR']);
         $visitor->setPassword($this->passwordEncoder->encodePassword(
             $visitor,
             'visitor'
         ));

         $manager->persist($visitor);

         //Créer un utilisateur de type "admin"
         $admin = new User();
         $admin->setEmail('admin@monsite.com');
         $admin->setRoles(['ROLE_ADMIN']);
         $admin->setPassword($this->passwordEncoder->encodePassword(
             $admin,
             'admin'
         ));

         $manager->persist($admin);

         $manager->flush();
     }
}