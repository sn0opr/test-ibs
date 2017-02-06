<?php
/**
 * Created by PhpStorm.
 * User: evolutio
 * Date: 06/02/17
 * Time: 08:04 م
 */

namespace AppBundle\Entity\Repository;


use Doctrine\ORM\EntityRepository;

class VXmlCdrRepository extends EntityRepository
{
    public function getCallsNumberByDate(\DateTime $dateTime)
    {
        return $this->getEntityManager()
            ->createQueryBuilder('v')
            ->select('COUNT(v)')
            ->from('AppBundle:VXmlCdr', 'v')
            ->where('v.startEpoch >= :startTs')
            ->andwhere('v.endEpoch <= :endTs')
            ->setParameter('startTs', $dateTime->setTime(0, 0, 0)->getTimestamp())
            ->setParameter('endTs', $dateTime->setTime(23, 59, 59)->getTimestamp())
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getNumberOfAnsweredCalls()
    {
        //return $this->
    }
}