<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Reserva
 *
 * @ORM\Table(name="reserva")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservaRepository")
 * @UniqueEntity(
 *     fields={"propiedad", "semana", "anio"},
 *     errorPath="semana",
 *     message="Ya existe reserva para la semana en esta propiedad."
 * )
 */
class Reserva
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Propiedad", inversedBy="reservas")
     * @ORM\JoinColumn(name="id_propiedad", referencedColumnName="id")
     */
    private $propiedad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="datetime")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="semana", type="string", length=255)
     */
    private $semana;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=255)
     */
    private $anio;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoReserva")
     * @ORM\JoinColumn(name="estado", referencedColumnName="id")
     */
     private $estado;

    /**
     * @ORM\OneToOne(targetEntity="Credito", mappedBy="reserva")
     */
     private $credito;

    /**
     * @ORM\OneToMany(targetEntity="HotSale", mappedBy="reserva", cascade={"all"})
     */
     private $hotSale;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Reserva
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Reserva
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set semana
     *
     * @param string $semana
     *
     * @return Reserva
     */
    public function setSemana($semana)
    {
        $this->semana = $semana;

        return $this;
    }

    /**
     * Get semana
     *
     * @return string
     */
    public function getSemana()
    {
        return $this->semana;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Reserva
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set propiedad
     *
     * @param \AppBundle\Entity\Propiedad $propiedad
     *
     * @return Reserva
     */
    public function setPropiedad(\AppBundle\Entity\Propiedad $propiedad = null)
    {
        $this->propiedad = $propiedad;

        return $this;
    }

    /**
     * Get propiedad
     *
     * @return \AppBundle\Entity\Propiedad
     */
    public function getPropiedad()
    {
        return $this->propiedad;
    }

    /**
    * Get anio
    * @return  
    */
    public function getAnio()
    {
        return $this->anio;
    }
    
    /**
    * Set anio
    * @return $this
    */
    public function setAnio($anio)
    {
        $this->anio = $anio;
        return $this;
    }


    /**
     * Set estado.
     *
     * @param \AppBundle\Entity\EstadoReserva|null $estado
     *
     * @return Reserva
     */
    public function setEstado(\AppBundle\Entity\EstadoReserva $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return \AppBundle\Entity\EstadoReserva|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set credito.
     *
     * @param \AppBundle\Entity\Credito|null $credito
     *
     * @return Reserva
     */
    public function setCredito(\AppBundle\Entity\Credito $credito = null)
    {
        $this->credito = $credito;

        return $this;
    }

    /**
     * Get credito.
     *
     * @return \AppBundle\Entity\Credito|null
     */
    public function getCredito()
    {
        return $this->credito;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hotSale = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get hotSale.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHotSale()
    {
        return $this->hotSale;
    }

}
