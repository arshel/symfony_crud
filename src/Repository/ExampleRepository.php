<?php

namespace App\Repository;

use App\Entity\ExampleLocations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExampleLocations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExampleLocations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExampleLocations[]    findAll()
 * @method ExampleLocations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExampleRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(
        ManagerRegistry $registry,
        EntityManagerInterface $manager
    )
    {
        parent::__construct($registry, ExampleLocations::class);
        $this->manager = $manager;
    }

    // /**
    //  * @return Example[] Returns an array of Example objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Example
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
