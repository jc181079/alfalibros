<?php

namespace Proxies\__CG__\principalBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PhpposGiftcards extends \principalBundle\Entity\PhpposGiftcards implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'giftcardNumber', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'description', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'value', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'inactive', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'deleted', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'giftcardId', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'customer'];
        }

        return ['__isInitialized__', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'giftcardNumber', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'description', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'value', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'inactive', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'deleted', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'giftcardId', '' . "\0" . 'principalBundle\\Entity\\PhpposGiftcards' . "\0" . 'customer'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PhpposGiftcards $proxy) {
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
    public function setGiftcardNumber($giftcardNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGiftcardNumber', [$giftcardNumber]);

        return parent::setGiftcardNumber($giftcardNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getGiftcardNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGiftcardNumber', []);

        return parent::getGiftcardNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', [$value]);

        return parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', []);

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setInactive($inactive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInactive', [$inactive]);

        return parent::setInactive($inactive);
    }

    /**
     * {@inheritDoc}
     */
    public function getInactive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInactive', []);

        return parent::getInactive();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getGiftcardId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getGiftcardId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGiftcardId', []);

        return parent::getGiftcardId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\principalBundle\Entity\PhpposCustomers $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

}