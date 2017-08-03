<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublisedOrderedBySize()
    {
        return $this->createQueryBuilder('genus')->andWhere('genus.isPublished = :isPublished')->setParameter('isPublished', true)->orderBy('genus.speciesCount', 'DESC')->getQuery()->execute();
    }
}
