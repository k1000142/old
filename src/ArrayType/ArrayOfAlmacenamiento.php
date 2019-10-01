<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAlmacenamiento ArrayType
 * @subpackage Arrays
 */
class ArrayOfAlmacenamiento extends AbstractStructArrayBase
{
    /**
     * The Almacenamiento
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Almacenamiento[]
     */
    public $Almacenamiento;
    /**
     * Constructor method for ArrayOfAlmacenamiento
     * @uses ArrayOfAlmacenamiento::setAlmacenamiento()
     * @param \StructType\Almacenamiento[] $almacenamiento
     */
    public function __construct(array $almacenamiento = array())
    {
        $this
            ->setAlmacenamiento($almacenamiento);
    }
    /**
     * Get Almacenamiento value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Almacenamiento[]|null
     */
    public function getAlmacenamiento()
    {
        return isset($this->Almacenamiento) ? $this->Almacenamiento : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAlmacenamiento method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlmacenamiento method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlmacenamientoForArrayConstraintsFromSetAlmacenamiento(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAlmacenamientoAlmacenamientoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAlmacenamientoAlmacenamientoItem instanceof \StructType\Almacenamiento) {
                $invalidValues[] = is_object($arrayOfAlmacenamientoAlmacenamientoItem) ? get_class($arrayOfAlmacenamientoAlmacenamientoItem) : sprintf('%s(%s)', gettype($arrayOfAlmacenamientoAlmacenamientoItem), var_export($arrayOfAlmacenamientoAlmacenamientoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Almacenamiento property can only contain items of type \StructType\Almacenamiento, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Almacenamiento value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Almacenamiento[] $almacenamiento
     * @return \ArrayType\ArrayOfAlmacenamiento
     */
    public function setAlmacenamiento(array $almacenamiento = array())
    {
        // validation for constraint: array
        if ('' !== ($almacenamientoArrayErrorMessage = self::validateAlmacenamientoForArrayConstraintsFromSetAlmacenamiento($almacenamiento))) {
            throw new \InvalidArgumentException($almacenamientoArrayErrorMessage, __LINE__);
        }
        if (is_null($almacenamiento) || (is_array($almacenamiento) && empty($almacenamiento))) {
            unset($this->Almacenamiento);
        } else {
            $this->Almacenamiento = $almacenamiento;
        }
        return $this;
    }
    /**
     * Add item to Almacenamiento value
     * @throws \InvalidArgumentException
     * @param \StructType\Almacenamiento $item
     * @return \ArrayType\ArrayOfAlmacenamiento
     */
    public function addToAlmacenamiento(\StructType\Almacenamiento $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Almacenamiento) {
            throw new \InvalidArgumentException(sprintf('The Almacenamiento property can only contain items of type \StructType\Almacenamiento, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Almacenamiento[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Almacenamiento|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Almacenamiento|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Almacenamiento|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Almacenamiento|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Almacenamiento|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Almacenamiento
     */
    public function getAttributeName()
    {
        return 'Almacenamiento';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAlmacenamiento
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
