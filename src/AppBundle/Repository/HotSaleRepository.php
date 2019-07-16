<?php

namespace AppBundle\Repository;

/**
 * HotSaleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HotSaleRepository extends \Doctrine\ORM\EntityRepository
{
	public function buildQuery($query, $pg)
	{
		
		$query->leftJoin( 'a.propiedad', 'p' );

		if ($nombre = $pg->getFilterValue('nombre')){
            $query->andWhere("UPPER(p.nombre) LIKE UPPER('%".$nombre."%')");
        }

        if ($semana = $pg->getFilterValue('semana')){
            $query->andWhere("a.semanaReserva = '".$semana."'");
        }
        
	    return $query;
	}


	public function hotSalesPublico($query, $pg)
	{
		
		$query->leftJoin( 'a.propiedad', 'p' );

		if ($nombre = $pg->getFilterValue('nombre')){
            $query->andWhere("UPPER(p.nombre) LIKE UPPER('%".$nombre."%')");
        }

        if ($semana = $pg->getFilterValue('semana')){
            $query->andWhere("a.semanaReserva = '".$semana."'");
        }

        $query->andWhere('a.reserva is null');
        
	    return $query;
	}


	public function hotSalesUsuario($query, $pg)
	{
		
		$query->leftJoin( 'a.propiedad', 'p' );

		if ($nombre = $pg->getFilterValue('nombre')){
            $query->andWhere("UPPER(p.nombre) LIKE UPPER('%".$nombre."%')");
        }

        if ($semana = $pg->getFilterValue('semana')){
            $query->andWhere("a.semanaReserva = '".$semana."'");
        }
        $query->leftJoin('a.reserva', 'r');
        $query->andWhere('r.usuario = :usuario');
        $query->setParameter('usuario', $pg->getFilterValue('usuario') );
        
	    return $query;
	}

	
	public function buscarReservasPropiedades($query, $pg)
	{
		$query->leftJoin( 'a.reserva', 'r' );
		$query->leftJoin( 'r.propiedad', 'pr' );
		
		$query->leftJoin( 'a.subasta', 's' );
		$query->leftJoin( 's.propiedad', 'ps' );

		if ($nombre = $pg->getFilterValue('nombre')){
            $query->andWhere("UPPER(pr.nombre) LIKE UPPER('%".$nombre."%')");
            $query->orWhere("UPPER(ps.nombre) LIKE UPPER('%".$nombre."%')");
        }

        if ($semana = $pg->getFilterValue('semana')){
            $query->andWhere("r.semana = '".$semana."'");
            $query->orWhere("s.semanaReserva = '".$semana."'");
        }
        
	    return $query;
	}


	public function buscarHotSalesPropiedad($propiedad){

		$hoy = new \Datetime('today');

		$query = $this->createQueryBuilder('a')
				->select(
					'a.semanaReserva',
                    'a.anioReserva' )
				->leftJoin('a.propiedad', 'p')
				->where( 'p.id = :propiedad' )
				->setParameter('propiedad', $propiedad)
				->andWhere( 'a.fin > :hoy' )
				->setParameter('hoy', $hoy)
				->groupBy('a.semanaReserva', 'a.anioReserva');
		        
	    return $query->getQuery()->getResult();
	}
}
