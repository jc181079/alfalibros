<?php

namespace Proxies\__CG__\principalBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PhpposItemKits extends \principalBundle\Entity\PhpposItemKits implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'itemKitNumber', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'productId', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'name', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'description', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'taxIncluded', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'unitPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'costPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'overrideDefaultTax', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionPercent', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionPercentType', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionFixed', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'changeCostPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'deleted', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'itemKitId', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'category', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'location', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'tag', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'tier'];
        }

        return ['__isInitialized__', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'itemKitNumber', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'productId', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'name', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'description', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'taxIncluded', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'unitPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'costPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'overrideDefaultTax', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionPercent', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionPercentType', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'commissionFixed', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'changeCostPrice', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'deleted', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'itemKitId', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'category', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'location', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'tag', '' . "\0" . 'principalBundle\\Entity\\PhpposItemKits' . "\0" . 'tier'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PhpposItemKits $proxy) {
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
    public function setItemKitNumber($itemKitNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItemKitNumber', [$itemKitNumber]);

        return parent::setItemKitNumber($itemKitNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemKitNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemKitNumber', []);

        return parent::getItemKitNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductId($productId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductId', [$productId]);

        return parent::setProductId($productId);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductId', []);

        return parent::getProductId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
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
    public function setTaxIncluded($taxIncluded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxIncluded', [$taxIncluded]);

        return parent::setTaxIncluded($taxIncluded);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxIncluded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxIncluded', []);

        return parent::getTaxIncluded();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPrice($unitPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPrice', [$unitPrice]);

        return parent::setUnitPrice($unitPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPrice', []);

        return parent::getUnitPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setCostPrice($costPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCostPrice', [$costPrice]);

        return parent::setCostPrice($costPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getCostPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCostPrice', []);

        return parent::getCostPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setOverrideDefaultTax($overrideDefaultTax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOverrideDefaultTax', [$overrideDefaultTax]);

        return parent::setOverrideDefaultTax($overrideDefaultTax);
    }

    /**
     * {@inheritDoc}
     */
    public function getOverrideDefaultTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOverrideDefaultTax', []);

        return parent::getOverrideDefaultTax();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommissionPercent($commissionPercent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommissionPercent', [$commissionPercent]);

        return parent::setCommissionPercent($commissionPercent);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommissionPercent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommissionPercent', []);

        return parent::getCommissionPercent();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommissionPercentType($commissionPercentType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommissionPercentType', [$commissionPercentType]);

        return parent::setCommissionPercentType($commissionPercentType);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommissionPercentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommissionPercentType', []);

        return parent::getCommissionPercentType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommissionFixed($commissionFixed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommissionFixed', [$commissionFixed]);

        return parent::setCommissionFixed($commissionFixed);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommissionFixed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommissionFixed', []);

        return parent::getCommissionFixed();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangeCostPrice($changeCostPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangeCostPrice', [$changeCostPrice]);

        return parent::setChangeCostPrice($changeCostPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getChangeCostPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangeCostPrice', []);

        return parent::getChangeCostPrice();
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
    public function getItemKitId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getItemKitId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemKitId', []);

        return parent::getItemKitId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\principalBundle\Entity\PhpposCategories $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function addLocation(\principalBundle\Entity\PhpposLocations $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLocation', [$location]);

        return parent::addLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLocation(\principalBundle\Entity\PhpposLocations $location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLocation', [$location]);

        return parent::removeLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\principalBundle\Entity\PhpposTags $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\principalBundle\Entity\PhpposTags $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', []);

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function addTier(\principalBundle\Entity\PhpposPriceTiers $tier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTier', [$tier]);

        return parent::addTier($tier);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTier(\principalBundle\Entity\PhpposPriceTiers $tier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTier', [$tier]);

        return parent::removeTier($tier);
    }

    /**
     * {@inheritDoc}
     */
    public function getTier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTier', []);

        return parent::getTier();
    }

}
