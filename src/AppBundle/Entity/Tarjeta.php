<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tarjeta
 *
 * @ORM\Table(name="tarjeta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TarjetaRepository")
 */
class Tarjeta
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
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="titular", type="string", length=255)
     */
    private $titular;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="fechaVto", type="datetime")
     */
    private $fechaVto;

    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="tarjeta", cascade={"persist"})
     */
    private $usuario;



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
     * Set titular
     *
     * @param string $titular
     *
     * @return Tarjeta
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Tarjeta
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Tarjeta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Tarjeta
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fechaVto
     *
     * @param \DateTime $fechaVto
     *
     * @return Tarjeta
     */
    public function setFechaVto($fechaVto)
    {
        $this->fechaVto = $fechaVto;

        return $this;
    }

    /**
     * Get fechaVto
     *
     * @return \DateTime
     */
    public function getFechaVto()
    {
        return $this->fechaVto;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuario.
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Tarjeta
     */
    public function addUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario.
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        return $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
