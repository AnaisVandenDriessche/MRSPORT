<?php

namespace MrsportBundle\Repository;

/**
 * sportsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{


    public function findlastfive()
    {


        $qb = $this->createQueryBuilder('u')
                    ->orderBy('u.lastLogin', 'DESC')
                    ->getQuery()->setMaxResults(5);

            return $qb->execute();
    }
}
