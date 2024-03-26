<?php

namespace App\Repository;

use App\Entity\DLCV;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DLCV>
 *
 * @method DLCV|null find($id, $lockMode = null, $lockVersion = null)
 * @method DLCV|null findOneBy(array $criteria, array $orderBy = null)
 * @method DLCV[]    findAll()
 * @method DLCV[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DLCVRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DLCV::class);
    }

//    /**
//     * @return DLCV[] Returns an array of DLCV objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DLCV
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
