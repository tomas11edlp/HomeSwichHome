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
        if ($titulo = $pg->getFilterValue('titulo')){
            $query->join("a.propiedad","p");
            $query->andWhere("UPPER(p.titulo) LIKE UPPER('%".$titulo."%')");
        }
        if ($min = $pg->getFilterValue('montoMin')){
            $query->andWhere("a.ultimoValor >= ".$min);
        }
        if ($max = $pg->getFilterValue('montoMax')){
          
            $query->andWhere("a.ultimoValor <= ".$max);
        }
        return $query;
    }

    
    public function subastasPorUsuarioQuery($query, $pg)
    {

      $usuario = $pg->getFilterValue('usuario');

      $query
        ->leftJoin("a.pujas", "p")
        ->join("p.usuario","u")
        ->andWhere("u.id = :usuario")->setParameter('usuario', $usuario)
        ->orderBy('a.semanaReserva', 'DESC');
          
          if ($titulo = $pg->getFilterValue('titulo')){
              $query->join("a.propiedad","prop");
              $query->andWhere("UPPER(prop.titulo) LIKE UPPER('%".$titulo."%')");
          }
          if ($min = $pg->getFilterValue('montoMin')){
              $query->andWhere("a.ultimoValor >= ".$min);
          }
          if ($max = $pg->getFilterValue('montoMax')){
            
              $query->andWhere("a.ultimoValor <= ".$max);
          }

        return $query;
    }
}
