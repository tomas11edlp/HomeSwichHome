<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Propiedad
 *
 * @ORM\Table(name="propiedad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PropiedadRepository")
 * @UniqueEntity(
 *     fields={"titulo"},
 *     errorPath="titulo",
 *     message="Ya existe propiedad con el título ingresado."
 * )
 */
class Propiedad
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
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=255)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="decimal", precision=10, scale=2)
     * @Assert\NotBlank(message="Campo obligatorio.")
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitada", type="string", length=1)
     */
    private $habilitada;

    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="propiedad")
     */
     private $reservas;

     /**
      * @ORM\OneToMany(targetEntity="Subasta", mappedBy="propiedad")
      */
      private $subastas;


    public function __toString(){
        return ucfirst( $this->titulo );
    }

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Propiedad
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Propiedad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Propiedad
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Propiedad
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Propiedad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Propiedad
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Propiedad
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Propiedad
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reserva.
     *
     * @param \AppBundle\Entity\Reserva $reserva
     *
     * @return Propiedad
     */
    public function addReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reservas[] = $reserva;

        return $this;
    }

    /**
     * Remove reserva.
     *
     * @param \AppBundle\Entity\Reserva $reserva
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeReserva(\AppBundle\Entity\Reserva $reserva)
    {
        return $this->reservas->removeElement($reserva);
    }

    /**
     * Get reservas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservas()
    {
        return $this->reservas;
    }

    /**
    * Get habilitada
    * @return  
    */
    public function getHabilitada()
    {
        return $this->habilitada;
    }
    
    /**
    * Set habilitada
    * @return $this
    */
    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;
        return $this;
    }

    /**
     * Add subasta.
     *
     * @param \AppBundle\Entity\Reserva $subasta
     *
     * @return Propiedad
     */
    public function addSubasta(\AppBundle\Entity\Subasta $subasta)
    {
        $this->subastas[] = $subasta;

        return $this;
    }

    /**
     * Remove subasta.
     *
     * @param \AppBundle\Entity\Subasta $subasta
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSubasta(\AppBundle\Entity\Subasta $subasta)
    {
        return $this->subastas->removeElement($subasta);
    }

    /**
     * Get subastas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubastas()
    {
        return $this->subastas;
    }

}
