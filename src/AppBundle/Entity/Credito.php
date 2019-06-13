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
}
