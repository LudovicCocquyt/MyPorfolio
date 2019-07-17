<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AllFixtures extends Fixture
{
	// private $passwordEncoder;

 //    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
 //    {
 //        $this->passwordEncoder = $passwordEncoder;
 //    }

     public function load(ObjectManager $manager)
     {
 //        $user = new User;
 //        $user->setemail('cocquyt.ludovic@gmail.com')
 //        	 ->setRoles(['ROLE_USER'])
 //        	 ->setPassword($this->passwordEncoder->encodePassword($user,'ALSKDJ'))
 //        	 ->setNom('COCQUYT')
 //        	 ->setPrenom('Ludovic')
 //        	 ->setAge('20/07/1987')
 //        	 ->setVille('Douvaine Fr')
 //        	 ->setLinkedin('https://www.linkedin.com/in/lcocquyt/')
 //        	 ->setGithub('https://github.com/LudovicCocquyt')
 //        	 ->setContent("L'informatique a toujours été une passion et je souhaite en faire mon 			  métier. Une forte motivation et des capacités
	// 					   d'analyse, de méthode et de rigueur m'aideront à forger mon avenir afin de devenir un bon développeur.")
 //        	 ->setPhone('06 74 23 75 29')
 //        	 ->setPhoto('photo.jpg');




 //        $manager->persist($user);

 //        $manager->flush();
    }
}
