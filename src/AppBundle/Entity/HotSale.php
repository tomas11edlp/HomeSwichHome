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
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="hotSale")
     */
     private $reserva;

    /**
     * @ORM\OneToMany(targetEntity="Subasta", mappedBy="hotSale")
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
     * Constructor
     */
    public function __construct()
    {
        $this->reserva = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subasta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reserva.
     *
     * @param \AppBundle\Entity\Reserva $reserva
     *
     * @return HotSale
     */
    public function addReserva(\AppBundle\Entity\Reserva $reserva)
    {
        $this->reserva[] = $reserva;

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
        return $this->reserva->removeElement($reserva);
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
     * Add subastum.
     *
     * @param \AppBundle\Entity\Subasta $subastum
     *
     * @return HotSale
     */
    public function addSubastum(\AppBundle\Entity\Subasta $subastum)
    {
        $this->subasta[] = $subastum;

        return $this;
    }

    /**
     * Remove subastum.
     *
     * @param \AppBundle\Entity\Subasta $subastum
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSubastum(\AppBundle\Entity\Subasta $subastum)
    {
        return $this->subasta->removeElement($subastum);
    }

    /**
     * Get subasta.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubasta()
    {
        return $this->subasta;
    }
}
