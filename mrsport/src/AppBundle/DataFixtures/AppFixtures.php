<?php 

// src/DataFixtures/AppFixtures.php
namespace AppBundle\DataFixtures;

// use App\Entity\Product;
use MrsportBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //  CLUB 
        // for ($i = 0; $i < 20; $i++) {
        //     $product = new Product();
        //     $product->setName('product '.$i);
        //     $product->setPrice(mt_rand(10, 100));
        //     $manager->persist($product);
        // }

        // $manager->flush();
        // $club = new Club ();
        // $club->setName($name);
        // $club->setPresident($president);
        // $club->setEntraineur($entraineur);
        // $club->setFondation(\year $fondation);
        // $club->setCouleur($couleur);
        // $club->setStade($stade);
        // $club->setSiteweb($siteweb);
        // $club->setSports(\MrsportBundle\Entity\Sports $sports);
        // $manager->flush();


        // EVENEMENT 
        // $evenement = new Evenements();
        // $evenement->setDate($date);
        // $evenement->setTime($time);
        // $evenement->setAdresse($adresse);
        // $evenement->setDescription($description);
        // $evenement->setSports(\MrsportBundle\Entity\Sports $sports);
        // $manager->flush();

        // SPORT
        // $sports = new Sports();
        // $sports->setName($name);
        // $manager->flush();

        // USER
        $user = new User();
        $user->setUsername('weblitzer');
        $user->setEmail('quidelantoine@gmail.com');
        $user->setPassword('$2y$13$jXqf/nw5noJjUdEfY0qDO.kaRKC4sJZs56MtXmZzZpBOubdHkggLe');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);
    
        $manager->persist($user);
        $manager->flush();        

        $user = new User();
        $user->setUsername('nathan');
        $user->setEmail('kariza@gmail.com');
        $user->setPassword('$2y$13$QodQ292fyhtvOx0QiSuSk.wOhcVwN7Guvb4/uD.uFhsAbfcx6NkZC');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);
        
    
        $manager->persist($user);
        $manager->flush();
        
    }
}