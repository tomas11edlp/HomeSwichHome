<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HotSale
 *
 * @ORM\Table(name="hot_sale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HotSaleRepository")
 */
class HotSale
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
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date")
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     */
    private $precio;

    /**
     * @ORM\ManyToOne(targetEntity="Propiedad")
     * @ORM\JoinColumn(name="propiedad_id", referencedColumnName="id")
     */
     private $propiedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="semanaReserva", type="integer")
     */
    private $semanaReserva;

    /**
     * @var integer
     *
     * @ORM\Column(name="anioReserva", type="integer")
     */
    private $anioReserva;

    /**
     * @ORM\ManyToOne(targetEntity="Reserva")
     * @ORM\JoinColumn(name="reserva_id", referencedColumnName="id")
     */
     private $reserva;


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
     * Set inicio.
     *
     * @param \DateTime $inicio
     *
     * @return HotSale
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio.
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin.
     *
     * @param \DateTime $fin
     *
     * @return HotSale
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin.
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set precio.
     *
     * @param string $precio
     *
     * @return HotSale
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio.
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    
    /**
     * Get reserva.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * Set subasta.
     *
     * @param \AppBundle\Entity\Subasta|null $subasta
     *
     * @return HotSale
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

    /**
     * Set semanaReserva.
     *
     * @param int $semanaReserva
     *
     * @return HotSale
     */
    public function setSemanaReserva($semanaReserva)
    {
        $this->semanaReserva = $semanaReserva;

        return $this;
    }

    /**
     * Get semanaReserva.
     *
     * @return int
     */
    public function getSemanaReserva()
    {
        return $this->semanaReserva;
    }

    /**
     * Set anioReserva.
     *
     * @param int $anioReserva
     *
     * @return HotSale
     */
    public function setAnioReserva($anioReserva)
    {
        $this->anioReserva = $anioReserva;

        return $this;
    }

    /**
     * Get anioReserva.
     *
     * @return int
     */
    public function getAnioReserva()
    {
        return $this->anioReserva;
    }

    /**
     * Set propiedad.
     *
     * @param \AppBundle\Entity\Propiedad|null $propiedad
     *
     * @return HotSale
     */
    public function setPropiedad(\AppBundle\Entity\Propiedad $propiedad = null)
    {
        $this->propiedad = $propiedad;

        return $this;
    }

    /**
     * Get propiedad.
     *
     * @return \AppBundle\Entity\Propiedad|null
     */
    public function getPropiedad()
    {
        return $this->propiedad;
    }

    /**
     * Set reserva.
     *
     * @param \AppBundle\Entity\Reserva|null $reserva
     *
     * @return HotSale
     */
    public function setReserva(\AppBundle\Entity\Reserva $reserva = null)
    {
        $this->reserva = $reserva;

        return $this;
    }
}
