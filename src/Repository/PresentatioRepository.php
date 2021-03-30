<?php

namespace App\Repository;

use App\Entity\Presentatio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Presentatio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Presentatio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Presentatio[]    findAll()
 * @method Presentatio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PresentatioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Presentatio::class);
    }

    // /**
    //  * @return Presentatio[] Returns an array of Presentatio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Presentatio
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
