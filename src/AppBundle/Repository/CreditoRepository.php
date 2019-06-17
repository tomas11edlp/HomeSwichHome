<?php

namespace AppBundle\Repository;

/**
 * CreditoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CreditoRepository extends \Doctrine\ORM\EntityRepository
{
	public function creditosDisponibles($usuario)
	{
		return $this->createQueryBuilder('c')
			->join('c.usuario','u')
			->join('c.estado','ec')
            ->where('u.id = '.$usuario)
            ->andWhere('ec.id = 1')
            ->orderBy('c.vencimiento','ASC')
            ->getQuery()
            ->getResult();
	}
}