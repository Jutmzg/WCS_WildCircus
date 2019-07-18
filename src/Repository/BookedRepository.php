<?php

namespace App\Repository;

use App\Entity\Booked;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Booked|null find($id, $lockMode = null, $lockVersion = null)
 * @method Booked|null findOneBy(array $criteria, array $orderBy = null)
 * @method Booked[]    findAll()
 * @method Booked[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Booked::class);
    }

    // /**
    //  * @return Booked[] Returns an array of Booked objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Booked
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
