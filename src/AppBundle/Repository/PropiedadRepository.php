<?php

namespace AppBundle\Repository;

/**
 * PropiedadRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PropiedadRepository extends \Doctrine\ORM\EntityRepository
{
	public function buildQuery($query, $pg)
	{
		// if ($nombre = $pg->getFilterValue('nombre')){
  //           $query->andWhere("UPPER(a.nombre) LIKE UPPER('%".$nombre."%')");
  //       }

  //       if ($pg->getFilterValue('nivel') !== null ){
  //       	$nivel = $pg->getFilterValue('nivel');
  //           $query->andWhere("a.nivel = '".$nivel."'");
  //       }

		// if ($pg->orderBy('nombre')) {
  //           $query->addOrderBy("a.nombre", $pg->direction);
  //       }
  //       if ($pg->orderBy('nivel')) {
  //           $query->addOrderBy("a.nivel", $pg->direction);
  //       }
        
	    return $query;
	}


  public function propiedadesHabilitadas($query, $pg)
  {
      if ($titulo = $pg->getFilterValue('titulo')){
        $query->andWhere("UPPER(a.titulo) LIKE UPPER('%".$titulo."%')");
      }

      if ($precioMaximo = $pg->getFilterValue('precioMaximo')){
        $query->andWhere("a.precio <=".$precioMaximo);
      }

      if ($precioMinimo = $pg->getFilterValue('precioMinimo')){
        $query->andWhere("a.precio >=".$precioMinimo);
      }

      $query->andWhere("a.habilitada = 'S'");
        
      return $query;
  }
}
