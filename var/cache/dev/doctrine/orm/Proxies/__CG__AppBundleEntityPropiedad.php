<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Propiedad extends \AppBundle\Entity\Propiedad implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'titulo', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'pais', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'provincia', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'localidad', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'domicilio', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'foto', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'precio', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'habilitada', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'reservas', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'subastas'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'titulo', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'pais', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'provincia', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'localidad', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'domicilio', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'foto', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'precio', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'habilitada', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'reservas', '' . "\0" . 'AppBundle\\Entity\\Propiedad' . "\0" . 'subastas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Propiedad $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', [$titulo]);

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', []);

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPais($pais)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPais', [$pais]);

        return parent::setPais($pais);
    }

    /**
     * {@inheritDoc}
     */
    public function getPais()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPais', []);

        return parent::getPais();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia($provincia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidad($localidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidad', [$localidad]);

        return parent::setLocalidad($localidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidad', []);

        return parent::getLocalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomicilio($domicilio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomicilio', [$domicilio]);

        return parent::setDomicilio($domicilio);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomicilio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomicilio', []);

        return parent::getDomicilio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', [$foto]);

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', []);

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio($precio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', [$precio]);

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', []);

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function addReserva(\AppBundle\Entity\Reserva $reserva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReserva', [$reserva]);

        return parent::addReserva($reserva);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReserva(\AppBundle\Entity\Reserva $reserva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReserva', [$reserva]);

        return parent::removeReserva($reserva);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservas', []);

        return parent::getReservas();
    }

    /**
     * {@inheritDoc}
     */
    public function getHabilitada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHabilitada', []);

        return parent::getHabilitada();
    }

    /**
     * {@inheritDoc}
     */
    public function setHabilitada($habilitada)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHabilitada', [$habilitada]);

        return parent::setHabilitada($habilitada);
    }

    /**
     * {@inheritDoc}
     */
    public function addSubasta(\AppBundle\Entity\Subasta $subasta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubasta', [$subasta]);

        return parent::addSubasta($subasta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubasta(\AppBundle\Entity\Subasta $subasta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubasta', [$subasta]);

        return parent::removeSubasta($subasta);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubastas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubastas', []);

        return parent::getSubastas();
    }

}
