<?php 

// src/DataFixtures/AppFixtures.php
namespace AppBundle\DataFixtures;

// use App\Entity\Product;
use MrsportBundle\Entity\User;
use MrsportBundle\Entity\Sports;
use MrsportBundle\Entity\Club;
use MrsportBundle\Entity\Evenements;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // USER
        $user = new User();
        $user->setUsername('weblitzer');
        $user->setEmail('quidelantoine@gmail.com');
        $user->setPassword('$2y$13$jXqf/nw5noJjUdEfY0qDO.kaRKC4sJZs56MtXmZzZpBOubdHkggLe');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);
        $manager->persist($user);      

        $user = new User();
        $user->setUsername('nathan');
        $user->setEmail('kariza@gmail.com');
        $user->setPassword('$2y$13$QodQ292fyhtvOx0QiSuSk.wOhcVwN7Guvb4/uD.uFhsAbfcx6NkZC');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);
        $manager->persist($user);

        // Sport
        $sport = new Sports();
        $sport->setName('Football');
        $manager->persist($sport);

        $sport2 = new Sports();
        $sport2->setName('Rugby');
        $manager->persist($sport2);

        $sport3 = new Sports();
        $sport3->setName('Hockey');
        $manager->persist($sport3);

        $sport4 = new Sports();
        $sport4->setName('Basket');
        $manager->persist($sport4);

        // Club
        $date = new \DateTime('2014-06-12');
        $club = new Club();
        $club->setName('FC Rouen');
        $club->setPresident('Mit Kabasele');
        $club->setEntraineur('Annaïs Guardiola');
        $club->setFondation($date);
        $club->setCouleur('Blue');
        $club->setStade('Velodrome');
        $club->setSiteweb('rouen.fr');
        $manager->persist($club);

        $date2 = new \DateTime('2017-06-12');
        $club2 = new Club();
        $club2->setName('FC Barentin');
        $club2->setPresident('Elmoufid Hadji');
        $club2->setEntraineur('Garcia');
        $club2->setFondation($date2);
        $club2->setCouleur('Yellow');
        $club2->setStade('Stade Vert');
        $club2->setSiteweb('barentin.fr');
        $manager->persist($club2);

        // // Evenement
        // $date3 = new \DateTime('2018-06-12');
        // $evenement = new Evenements();
        // $evenement->setDate($date3);
        // $evenement->setTime($date3);
        // $evenement->setAdresse('23 rue Victor Hugo');
        // $evenement->setDescription('Rencotre à sportif à Soteville-Lès-Rouen');
        // $manager->persist($evenement);

        $manager->flush();
        
    }
}