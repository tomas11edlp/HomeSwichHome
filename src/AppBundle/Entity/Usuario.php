<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraints as MyAssert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @MyAssert\ValidarFechaNacimiento
 * @UniqueEntity(
 *     fields={"email"},
 *     errorPath="email",
 *     message="Ya esta en uso, intente con otro."
 * )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
// class Usuario implements UserInterface
class Usuario implements  AdvancedUserInterface, \Serializable
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
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Campo obligatorio.")
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=255)
     */
    private $rol;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @ORM\OneToMany(targetEntity="Credito", mappedBy="usuario", cascade={"all"})
     */
     private $creditos;

     /**
      * @Assert\Valid
      * @ORM\ManyToOne(targetEntity="Tarjeta", inversedBy="usuario", cascade={"persist"})
      * @ORM\JoinColumn(name="id_tarjeta", referencedColumnName="id")
      */
     private $tarjeta;



    public function __toString()
    {
        return $this->apellido.', '.$this->nombre;
    }

    public function nombreCompleto()
    {
        return $this->apellido.', '.$this->nombre;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fechaNacimiento
     *
     * @param string $fechaNacimiento
     *
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return string
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

     public function isAccountNonExpired()
    {
        return true;
    }
    public function isAccountNonLocked()
    {
        return true;
    }
    public function isCredentialsNonExpired()
    {
        return true;
    }
    public function isEnabled()
    {
        return true;
    }

    public function getUserName()
    {
        return $this->email;
    }

    public function esAdministrador()
    {
        // return $this->getRoles()[0] == "ROLE_ADMINISTRADOR";
        return ( ($this->getRoles()[0] == "ROLE_ADMINISTRADOR") or ($this->getRoles()[0] == "ROLE_SUPERADMINISTRADOR") );
    }

    function eraseCredentials()
    {
    }

    function getRoles()
    {
        //return array('ROLE_USUARIO');
        return array( 'ROLE_'.strtoupper( $this->getRol() ) );
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
        ) = unserialize($serialized);
    }

    /**
    * Get rol
    * @return  
    */
    public function getRol()
    {
        return $this->rol;
    }
    
    /**
    * Set rol
    * @return $this
    */
    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }

    /**
     * Set fechaRegistro.
     *
     * @param \DateTime $fechaRegistro
     *
     * @return Usuario
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro.
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->creditos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add credito.
     *
     * @param \AppBundle\Entity\Credito $credito
     *
     * @return Usuario
     */
    public function addCredito(\AppBundle\Entity\Credito $credito)
    {
        $credito->setUsuario($this);
        $this->creditos[] = $credito;

        return $this;
    }

    /**
     * Remove credito.
     *
     * @param \AppBundle\Entity\Credito $credito
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCredito(\AppBundle\Entity\Credito $credito)
    {
        return $this->creditos->removeElement($credito);
    }

    /**
     * Get creditos.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreditos()
    {
        return $this->creditos;
    }

    /**
     * Set tarjeta
     *
     * @param \AppBundle\Entity\Tarjeta|null $tarjeta
     *
     * @return Usuario
     */
    public function setTarjeta(\AppBundle\Entity\Tarjeta $tarjeta = null)
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }

    /**
     * Get tarjeta
     *
     * @return \AppBundle\Entity\Tarjeta|null
     */
    public function getTarjeta()
    {
        return $this->tarjeta;
    }
}
