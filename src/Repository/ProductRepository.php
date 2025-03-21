<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function find($id, $lockMode = null, $lockVersion = null): ?Product
    {
        return parent::find($id, $lockMode, $lockVersion);
    }

    public function findBySizes(array $sizes): array
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.sizes IN (:sizes)')
            ->setParameter('sizes', $sizes);

        return $qb->getQuery()->getResult();
    }

    public function findByPriceRange(?float $minPrice, ?float $maxPrice): array
    {
        $qb = $this->createQueryBuilder('p');

        if ($minPrice !== null) {
            $qb->andWhere('p.price >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null) {
            $qb->andWhere('p.price <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }

        return $qb->getQuery()->getResult();
    }
}
