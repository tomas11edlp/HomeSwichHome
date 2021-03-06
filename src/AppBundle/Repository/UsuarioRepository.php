<?php

namespace AppBundle\Repository;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends \Doctrine\ORM\EntityRepository
{
	public function findUsuariosFiltrados( $usuario, $nombre )
	{
		$sql = $this->createQueryBuilder('a');

		if ( $usuario ) {
			$sql->andWhere('a.usuario LIKE :usuario');
			$sql->setParameter( 'usuario', '%'.$usuario.'%' );
		}

		if ( $nombre ) {
			$sql->andWhere('a.nombre LIKE :nombre');
			$sql->setParameter( 'nombre', '%'.$nombre.'%' );
		}

		// $sql->andWhere('a.eliminado = 0');

		// $sql->orderBy('a.fecha', 'ASC');
		// $sql->setFirstResult(10);
		$sql->setMaxResults(100);

		// dump( $sql->getQuery() ); die();

		return $sql->getQuery()->getResult();
	}


	//PARA EL INDEX DE CLIENTES
	public function findClientes($query, $pg)
	{
	   	if ($nombreCompleto = $pg->getFilterValue('nombreCompleto')){
	        $query->andWhere("CONCAT (UPPER(a.nombre),' ',UPPER(a.apellido))  LIKE UPPER('%".$nombreCompleto."%')");
	        $query->orWhere("CONCAT (UPPER(a.apellido),' ',UPPER(a.nombre))  LIKE UPPER('%".$nombreCompleto."%')");
      	}

  		if ($rol = $pg->getFilterValue('rol')){
	        $query->andWhere("a.rol like :rol");
	        $query->setParameter('rol', $rol);
      	}

      	if ($fechaRegistro = $pg->getFilterValue('fechaRegistro')){
	        $query->andWhere("a.fechaRegistro = :fecha");
	        $query->setParameter('fecha', $fechaRegistro->format('Y-m-d'));
      	}

      	$query->andWhere("a.rol != 'ADMINISTRADOR'");
      	$query->andWhere("a.rol != 'SUPERADMINISTRADOR'");
	        
      	return $query;
  	}


  	//PARA EL INDEX DE ADMINISTRADORES
	public function findAdministradores($query, $pg)
	{
	   	if ($nombreCompleto = $pg->getFilterValue('nombreCompleto')){
	        $query->andWhere("CONCAT (UPPER(a.nombre),' ',UPPER(a.apellido))  LIKE UPPER('%".$nombreCompleto."%')");
	        $query->orWhere("CONCAT (UPPER(a.apellido),' ',UPPER(a.nombre))  LIKE UPPER('%".$nombreCompleto."%')");
      	}
	    $query->andWhere("a.rol like 'ADMINISTRADOR'");
	        
      	return $query;
  	}

	



	public function findAll()
	{
		$sql = $this->createQueryBuilder('a');

		// dump( $sql->getQuery() ); die();

		return $sql->getQuery()->getResult();
	}
}
