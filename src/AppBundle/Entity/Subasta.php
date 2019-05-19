<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Subasta
 *
 * @ORM\Table(name="subasta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubastaRepository")
 * @UniqueEntity(
 *     fields={"propiedad", "semanaReserva", "anioReserva"},
 *     errorPath="propiedad",
 *     message="Ya existe subasta para la semana y propiedad."
 * )
 */
class Subasta
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
     * @ORM\ManyToOne(targetEntity="Propiedad")
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaReservaInicio", type="datetime", nullable = true)
     */
    private $fechaReservaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaReservaFin", type="datetime", nullable = true)
     */
    private $fechaReservaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="semanaReserva", type="integer")
     */
    private $semanaReserva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anioReserva", type="integer")
     */
    private $anioReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="montoBase", type="decimal", precision=10, scale=2)
     */
    private $montoBase;



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
     * @return Subasta
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
     * @return Subasta
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
     * Set fechaReservaInicio
     *
     * @param \DateTime $fechaReservaInicio
     *
     * @return Subasta
     */
    public function setFechaReservaInicio($fechaReservaInicio)
    {
        $this->fechaReservaInicio = $fechaReservaInicio;

        return $this;
    }

    /**
     * Get fechaReservaInicio
     *
     * @return \DateTime
     */
    public function getFechaReservaInicio()
    {
        return $this->fechaReservaInicio;
    }

    /**
     * Set fechaReservaFin
     *
     * @param \DateTime $fechaReservaFin
     *
     * @return Subasta
     */
    public function setFechaReservaFin($fechaReservaFin)
    {
        $this->fechaReservaFin = $fechaReservaFin;

        return $this;
    }

    /**
     * Get fechaReservaFin
     *
     * @return \DateTime
     */
    public function getFechaReservaFin()
    {
        return $this->fechaReservaFin;
    }

    /**
     * Set montoBase
     *
     * @param string $montoBase
     *
     * @return Subasta
     */
    public function setMontoBase($montoBase)
    {
        $this->montoBase = $montoBase;

        return $this;
    }

    /**
     * Get montoBase
     *
     * @return string
     */
    public function getMontoBase()
    {
        return $this->montoBase;
    }

    /**
     * Set propiedad
     *
     * @param \AppBundle\Entity\Propiedad $propiedad
     *
     * @return Subasta
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
    * Get semanaReserva
    * @return  
    */
    public function getSemanaReserva()
    {
        return $this->semanaReserva;
    }
    
    /**
    * Set semanaReserva
    * @return $this
    */
    public function setSemanaReserva($semanaReserva)
    {
        $this->semanaReserva = $semanaReserva;
        return $this;
    }

    /**
    * Get anioReserva
    * @return  
    */
    public function getAnioReserva()
    {
        return $this->anioReserva;
    }
    
    /**
    * Set anioReserva
    * @return $this
    */
    public function setAnioReserva($anioReserva)
    {
        $this->anioReserva = $anioReserva;
        return $this;
    }
}
