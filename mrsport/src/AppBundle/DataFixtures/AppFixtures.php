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
        $club->setSports($sport);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');       
        $club->setStatus('invalide');
        $manager->persist($club);

        $date2 = new \DateTime('2017-06-12');
        $club = new Club();
        $club->setName('Rouen hockey élite 76');
        $club->setPresident('Thierry Chaix');
        $club->setEntraineur('Fabrice Lhenry et Ari Salo');
        $club->setFondation($date2);
        $club->setCouleur('noir et jaune');
        $club->setStade('L\'Île Lacroix');
        $club->setSiteweb('rouenhockeyelite76.com');
        $club->setSports($sport3);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('new');
        $manager->persist($club);

        $date2 = new \DateTime('2011-06-12');
        $club = new Club();
        $club->setName('Rouen Normandie Rugby');
        $club->setPresident('Jean-Louis Louvel');
        $club->setEntraineur('Richard Hill');
        $club->setFondation($date2);
        $club->setCouleur('Noir et blanc');
        $club->setStade('stade Jean-Mermoz');
        $club->setSiteweb('rouen-normandie-rugby.fr');
        $club->setSports($sport2);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('new');
        $manager->persist($club);

        $date2 = new \DateTime('2011-07-01');
        $club = new Club();
        $club->setName('Rouen Métropole Basket');
        $club->setPresident('Yvan Gueuder');
        $club->setEntraineur('Alexandre Ménard');
        $club->setFondation($date2);
        $club->setCouleur('Bleu, blanc et orange');
        $club->setStade('Kindarena');
        $club->setSiteweb('rouenmetrobasket.com');
        $club->setSports($sport4);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('valide');
        $manager->persist($club);

        $date2 = new \DateTime('2011-07-01');
        $club = new Club();
        $club->setName('F.C. Feminin Rouen Plateau Est');
        $club->setPresident('Feret Romain');
        $club->setEntraineur('John Doe');
        $club->setFondation($date2);
        $club->setCouleur('Rose et noir');
        $club->setStade('Stade Stanislas Bilyk');
        $club->setSiteweb('https://www.fff.fr/la-vie-des-clubs/183800/infos-cles');
        $club->setSports($sport);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('valide');
        $manager->persist($club);


        $date2 = new \DateTime('1942-09-01');
        $club = new Club();
        $club->setName('SSCC BASKET');
        $club->setPresident('PESQUET Pascal');
        $club->setEntraineur('DUBOSC David');
        $club->setFondation($date2);
        $club->setCouleur('Rose et noir');
        $club->setStade('Stade Sotteville-lès-Rouen');
        $club->setSiteweb('http://www.sotteville-basket.fr');
        $club->setSports($sport4);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('valide');
        $manager->persist($club);

        $date2 = new \DateTime('1942-09-01');
        $club = new Club();
        $club->setName('Association Sportive Rouen Université Club Section Rugby');
        $club->setPresident('John Doe');
        $club->setEntraineur('VALOGNES Guillaume');
        $club->setFondation($date2);
        $club->setCouleur('Vert et noir');
        $club->setStade('Stade Mont Saint Aignan');
        $club->setSiteweb('http://rugby.asrouenuc.com');
        $club->setSports($sport2);
        $club->setTelephone('0235806565');
        $club->setEmail('frouen@gmail.com');    
        $club->setStatus('valide');
        $manager->persist($club);


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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
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
        $evenement->setTelephone('0235806565');
        $evenement->setEmail('frouen@gmail.com');    
        $evenement->setStatus('valide');
        $manager->persist($evenement);

        $manager->flush();
        
    }
}