<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credito
 *
 * @ORM\Table(name="credito")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CreditoRepository")
 */
class Credito
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="vencimiento", type="date", nullable=true)
     */
    private $vencimiento;

    /**
     * @ORM\ManyToOne(targetEntity="EstadoCredito")
     * @ORM\JoinColumn(name="estado", referencedColumnName="id")
     */
     private $estado;

     /**
      * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="creditos")
      * @ORM\JoinColumn(name="usuario", referencedColumnName="id")
      */
      private $usuario;

     /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="Subasta")
     * @ORM\JoinColumn(name="subasta_id", referencedColumnName="id")
     */
       private $subasta;

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
     * Set vencimiento.
     *
     * @param \DateTime|null $vencimiento
     *
     * @return Credito
     */
    public function setVencimiento($vencimiento = null)
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento.
     *
     * @return \DateTime|null
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }


    /**
     * Set estado.
     *
     * @param \AppBundle\Entity\EstadoCredito|null $estado
     *
     * @return Credito
     */
    public function setEstado(\AppBundle\Entity\EstadoCredito $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return \AppBundle\Entity\EstadoCredito|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set usuario.
     *
     * @param \AppBundle\Entity\Usuario|null $usuario
     *
     * @return Credito
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
     * Set subasta.
     *
     * @param \AppBundle\Entity\Subasta|null $subasta
     *
     * @return Credito
     */
    public function setSubasta(\AppBundle\Entity\Subasta $subasta = null)
    {
        $this->subasta = $subasta;

        return $this;
    }

    /**
     * Get subasta.
     *
     * @return \AppBundle\Entity\Subasta|null
     */
    public function getSubasta()
    {
        return $this->subasta;
    }
}
