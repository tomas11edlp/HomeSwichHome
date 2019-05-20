<?php

namespace AppBundle\Repository;

/**
 * SubastaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SubastaRepository extends \Doctrine\ORM\EntityRepository
{
  	public function buildQuery($query, $pg)
  	{
//     if ($nombre = $pg->getFilterValue('nombre')){
//           $query->andWhere("UPPER(a.nombre) LIKE UPPER('%".$nombre."%')");
//       }
//       if ($pg->orderBy('nivel')) {
//           $query->addOrderBy("a.nivel", $pg->direction);
//       }
          
  	    return $query;
  	}
    public function publicoQuery($query, $pg)
    {
        $query->join('a.estado', 'e')
            ->andWhere('e.id = 1');     
        return $query;
    }
}
