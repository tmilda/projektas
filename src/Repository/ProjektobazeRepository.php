<?php

namespace App\Repository;

use App\Entity\Projektobaze;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Projektobaze|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projektobaze|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projektobaze[]    findAll()
 * @method Projektobaze[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjektobazeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Projektobaze::class);
    }

    // /**
    //  * @return Projektobaze[] Returns an array of Projektobaze objects
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
    public function findOneBySomeField($value): ?Projektobaze
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
