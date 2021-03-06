<?php

namespace MrsportBundle\Repository;

/**
 * clubRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class clubRepository extends \Doctrine\ORM\EntityRepository
{
    public function findlastfive()
    {


        $qb = $this->createQueryBuilder('c')
                    ->orderBy('c.id', 'DESC')
                    ->getQuery()->setMaxResults(5);

            return $qb->execute();
    }

    public function getClubWithStatus($status = 'valide')
    {

        $qb = $this->createQueryBuilder('c')
                ->where("c.status = :identifier")
                ->orderBy('c.id', 'ASC')
                ->setParameter(':identifier', $status)
                ->getQuery();
                   
            return $qb->execute();
    }

  
}
