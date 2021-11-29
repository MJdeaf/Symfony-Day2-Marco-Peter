<?php

namespace App\Repository;

use App\Entity\Travels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Travels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Travels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Travels[]    findAll()
 * @method Travels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravelsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Travels::class);
    }

    // /**
    //  * @return Travels[] Returns an array of Travels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Travels
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
