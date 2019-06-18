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
        if ($titulo = $pg->getFilterValue('titulo')){
            $query->join("a.propiedad","p");
            $query->andWhere("UPPER(p.titulo) LIKE UPPER('%".$titulo."%')");
        }
        $query->join('a.pujas','pu');
        if ($min = $pg->getFilterValue('montoMin')){
            $query->andWhere("pu.monto >= ".$min);
        }
        if ($max = $pg->getFilterValue('montoMax')){
            $query->andWhere("pu.monto <= ".$max);
        }
        $query->join('a.estado', 'e')
              ->andWhere('e.id = 1');
        return $query;
    }
}
