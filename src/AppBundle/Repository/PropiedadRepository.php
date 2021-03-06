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


  //Se utiliza para el autocomplete
  public function findPropiedadPorTitulo($titulo )
  {
    $sql = $this->createQueryBuilder('a');

    if ( $titulo ) {
      $sql->andWhere('a.titulo LIKE :titulo ');
      $sql->setParameter( 'titulo', '%'.$titulo.'%' );
    }

    $sql->andWhere("a.habilitada = 'S'");
    
    return $sql->getQuery()->getResult();
  }



  public function findParaSubasta($sem,$anio)
  {
    $query = $this->createQueryBuilder('p')
                  ->leftJoin('p.reservas','r')
                  ->leftJoin('p.subastas','s')
                  ->where('r.semana = '.$sem.' AND r.anio = '.$anio)
                  ->orWhere('s.semanaReserva = '.$sem.' AND s.anioReserva = '.$anio)
                  ->andWhere("p.habilitada = 'S'")
                  ->orderBy("p.id","ASC");


    return $query->getQuery()->getResult();
  }



  public function propiedadesDisponiblesHotSale()
  {
    $hoy = new \Datetime('now');
    $query = $this->createQueryBuilder('p')
                  ->leftJoin('p.reservas','r')
                  ->leftJoin('p.subastas','s')
                  ->where('s.pujas is empty')
                  ->andWhere('s.fechaReservaInicio > :hoy')
                  ->orWhere('r.estado = 3')
                  ->andWhere('r.fechaInicio > :hoy')
                  ->setParameter('hoy', $hoy);
    dump($query->getQuery()->getSql());
    return $query->getQuery()->getResult();
  }  


  public function semanasSubastasDisponiblesHotSale($propiedad)
  {
    $hoy = new \Datetime('now');
    $query = $this->createQueryBuilder('p')
                  ->select(
                    's.semanaReserva as semanaSubasta', 
                    's.anioReserva as anioSubasta')
                  ->leftJoin('p.subastas','s')
                  ->Where('s.pujas is empty')
                  ->andWhere('s.fechaReservaInicio > :hoy')
                  ->andWhere('s.estado = 2')
                  ->setParameter('hoy', $hoy);

                  if (!empty($propiedad)) {
                    $query->andWhere('p.id = '.$propiedad);
                  }

    return $query->getQuery()->getResult();
  } 


  public function semanasReservasDisponiblesHotSale($propiedad)
  {
    $hoy = new \Datetime('now');
    $query = $this->createQueryBuilder('p')
                  ->select(
                    'r.semana as semanaReserva',
                    'r.anio as anioReserva' )
                  ->leftJoin('p.reservas','r')
                  ->Where('r.estado = 3')
                  ->andWhere('r.fechaInicio > :hoy')
                  ->setParameter('hoy', $hoy);

                  if (!empty($propiedad)) {
                    $query->andWhere('p.id = '.$propiedad);
                  }

    return $query->getQuery()->getResult();
  }


}
