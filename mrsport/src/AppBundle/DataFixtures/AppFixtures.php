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

        $user = new User();
        $user->setUsername('anais');
        $user->setEmail('anaisvdd@gmail.com');
        $user->setPassword('$2y$13$mciblxB6J0Vz7moaJtdc0eGTkhCJp/t3sAU/HpB9XWL9KzBpxmcBG');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('zizou');
        $user->setEmail('zidane@fff.com');
        $user->setPassword('$2y$13$mciblxB6J0Vz7moaJtdc0eGTkhCJp/t3sAU/HpB9XWL9KzBpxmcBG');
        $user->setRoles(['']);
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('serena');
        $user->setEmail('williams@usa.com');
        $user->setPassword('$2y$13$mciblxB6J0Vz7moaJtdc0eGTkhCJp/t3sAU/HpB9XWL9KzBpxmcBG');
        $user->setRoles(['']);
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('stephen');
        $user->setEmail('curry@nba.com');
        $user->setPassword('$2y$13$mciblxB6J0Vz7moaJtdc0eGTkhCJp/t3sAU/HpB9XWL9KzBpxmcBG');
        $user->setRoles(['']);
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('lebron');
        $user->setEmail('james@nba.com');
        $user->setPassword('$2y$13$mciblxB6J0Vz7moaJtdc0eGTkhCJp/t3sAU/HpB9XWL9KzBpxmcBG');
        $user->setRoles(['']);
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
        $date = new \DateTime('1899-07-11');
        $club = new Club();
        $club->setName('FC Rouen');
        $club->setPresident('Fabrice Tardy');
        $club->setEntraineur('David Giguel');
        $club->setFondation($date);
        $club->setCouleur('rouge et blanc');
        $club->setStade('Stade Robert-Diochon');
        $club->setSiteweb('fcrouen.fr');
        $club->setSports($sport1);
        $club->setStatus('invalide');
        $manager->persist($club);

        $date2 = new \DateTime('2017-06-12');
        $club2 = new Club();
        $club2->setName('Rouen hockey élite 76');
        $club2->setPresident('Thierry Chaix');
        $club2->setEntraineur('Fabrice Lhenry et Ari Salo');
        $club2->setFondation($date2);
        $club2->setCouleur('noir et jaune');
        $club2->setStade('L\'Île Lacroix');
        $club2->setSiteweb('rouenhockeyelite76.com');
        $club2->setSports($sport3);
        $club2->setStatus('new');
        $manager->persist($club2);

        $date2 = new \DateTime('2011-06-12');
        $club2 = new Club();
        $club2->setName('Rouen Normandie Rugby');
        $club2->setPresident('Jean-Louis Louvel');
        $club2->setEntraineur('Richard Hill');
        $club2->setFondation($date2);
        $club2->setCouleur('Noir et blanc');
        $club2->setStade('stade Jean-Mermoz');
        $club2->setSiteweb('rouen-normandie-rugby.fr');
        $club2->setSports($sport2);
        $club2->setStatus('new');
        $manager->persist($club2);

        $date2 = new \DateTime('2011-07-01');
        $club2 = new Club();
        $club2->setName('Rouen Métropole Basket');
        $club2->setPresident('Yvan Gueuder');
        $club2->setEntraineur('Alexandre Ménard');
        $club2->setFondation($date2);
        $club2->setCouleur('Bleu, blanc et orange');
        $club2->setStade('Kindarena');
        $club2->setSiteweb('rouenmetrobasket.com');
        $club2->setSports($sport4);
        $club2->setStatus('valide');
        $manager->persist($club2);

        $date2 = new \DateTime('2011-07-01');
        $club2 = new Club();
        $club2->setName('F.C. Feminin Rouen Plateau Est');
        $club2->setPresident('Feret Romain');
        $club2->setEntraineur('John Doe');
        $club2->setFondation($date2);
        $club2->setCouleur('Rose et noir');
        $club2->setStade('Stade Stanislas Bilyk');
        $club2->setSiteweb('https://www.fff.fr/la-vie-des-clubs/183800/infos-cles');
        $club2->setSports($sport1);
        $club2->setStatus('valide');
        $manager->persist($club2);


        $date2 = new \DateTime('1942-09-01');
        $club2 = new Club();
        $club2->setName('SSCC BASKET');
        $club2->setPresident('PESQUET Pascal');
        $club2->setEntraineur('DUBOSC David');
        $club2->setFondation($date2);
        $club2->setCouleur('Rose et noir');
        $club2->setStade('Stade Sotteville-lès-Rouen');
        $club2->setSiteweb('http://www.sotteville-basket.fr');
        $club2->setSports($sport4);
        $club2->setStatus('valide');
        $manager->persist($club2);


        $date2 = new \DateTime('1942-09-01');
        $club2 = new Club();
        $club2->setName('Association Sportive Rouen Université Club Section Rugby');
        $club2->setPresident('John Doe');
        $club2->setEntraineur('VALOGNES Guillaume');
        $club2->setFondation($date2);
        $club2->setCouleur('Vert et noir');
        $club2->setStade('Stade Mont Saint Aignan');
        $club2->setSiteweb('http://rugby.asrouenuc.com');
        $club2->setSports($sport2);
        $club2->setStatus('valide');
        $manager->persist($club2);


        // Evenement
        $date3 = '2018-06-12';
        $time = '15:30';
        $evenement = new Evenements();
        $evenement->setName('Rencontre sportives'); 
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('23 rue Victor Hugo');
        $evenement->setDescription('Rencontre sportives');
        $evenement->setVille('Soteville-Lès-Rouen');
        $evenement->setStatus('valide');
        $manager->persist($evenement);

        
        $date3 = '2018-09-18';
        $time = '09:30';
        $evenement = new Evenements();
        $evenement->setName('Seine Marathon 76'); 
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('hôtel de ville');
        $evenement->setDescription('Marathon');
        $evenement->setVille('Rouen');
        $evenement->setStatus('valide');
        $manager->persist($evenement);

       
        $date3 = '2018-05-01';
        $time = '09:30';
        $evenement = new Evenements();
        $evenement->setName('24h motonautiques');      
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('quai du Havre');
        $evenement->setDescription('24h motonautiques');
        $evenement->setVille('Rouen');
        $evenement->setStatus('invalide');
        $manager->persist($evenement);
        
        $date3 = '2018-06-01';
        $time = '08:30';
        $evenement = new Evenements();
        $evenement->setName('Rouen Triathlon');      
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('quai du Havre');
        $evenement->setDescription('triahlon');
        $evenement->setVille('Rouen');
        $evenement->setStatus('new');
        $manager->persist($evenement);

        $date3 = '2018-01-01';
        $time = '19:00';
        $evenement = new Evenements();
        $evenement->setName('Zumba');      
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('Kindarena');
        $evenement->setDescription('Zumba');
        $evenement->setVille('Rouen');
        $evenement->setStatus('new');
        $manager->persist($evenement);

        $date3 = '2018-06-01';
        $time = '13:00';
        $evenement = new Evenements();
        $evenement->setName('Baseball - European Champion’s Cup');      
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('Saint Exupéry');
        $evenement->setDescription('Championnat d\'Europe de BaseBall');
        $evenement->setVille('Rouen');
        $evenement->setStatus('valide');
        $manager->persist($evenement);

        $date3 = '2018-06-10';
        $time = '13:00';
        $evenement = new Evenements();
        $evenement->setName('Coupe UEFA des régions');      
        $evenement->setDate(\DateTime::createFromFormat('Y-m-d', $date3));
        $evenement->setTime(\DateTime::createFromFormat('H:i', $time));
        $evenement->setAdresse('Saint-Lô');
        $evenement->setDescription('Football - Coupe UEFA des régions');
        $evenement->setVille('Saint-Lô');
        $evenement->setStatus('valide');
        $manager->persist($evenement);

        $manager->flush();
        
    }
}