<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudCliente
 *
 * @ORM\Table(name="solicitud_cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SolicitudClienteRepository")
 */
class SolicitudCliente
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="finalizada", type="string", length=1)
     */
    private $finalizada;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1)
     */
    private $tipo;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha.
     *
     * @param \DateTime $fecha
     *
     * @return SolicitudCliente
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha.
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set finalizada.
     *
     * @param string $finalizada
     *
     * @return SolicitudCliente
     */
    public function setFinalizada($finalizada)
    {
        $this->finalizada = $finalizada;

        return $this;
    }

    /**
     * Get finalizada.
     *
     * @return string
     */
    public function getFinalizada()
    {
        return $this->finalizada;
    }

    /**
     * Set usuario.
     *
     * @param \AppBundle\Entity\Usuario|null $usuario
     *
     * @return SolicitudCliente
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario.
     *
     * @return \AppBundle\Entity\Usuario|null
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set tipo.
     *
     * @param string $tipo
     *
     * @return SolicitudCliente
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
