<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlmacenamientoResponse StructType
 * @subpackage Structs
 */
class AlmacenamientoResponse extends AbstractStructBase
{
    /**
     * The AlmacenamientoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAlmacenamiento
     */
    public $AlmacenamientoResult;
    /**
     * Constructor method for AlmacenamientoResponse
     * @uses AlmacenamientoResponse::setAlmacenamientoResult()
     * @param \ArrayType\ArrayOfAlmacenamiento $almacenamientoResult
     */
    public function __construct(\ArrayType\ArrayOfAlmacenamiento $almacenamientoResult = null)
    {
        $this
            ->setAlmacenamientoResult($almacenamientoResult);
    }
    /**
     * Get AlmacenamientoResult value
     * @return \ArrayType\ArrayOfAlmacenamiento|null
     */
    public function getAlmacenamientoResult()
    {
        return $this->AlmacenamientoResult;
    }
    /**
     * Set AlmacenamientoResult value
     * @param \ArrayType\ArrayOfAlmacenamiento $almacenamientoResult
     * @return \StructType\AlmacenamientoResponse
     */
    public function setAlmacenamientoResult(\ArrayType\ArrayOfAlmacenamiento $almacenamientoResult = null)
    {
        $this->AlmacenamientoResult = $almacenamientoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AlmacenamientoResponse
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
