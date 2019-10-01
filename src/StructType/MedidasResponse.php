<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedidasResponse StructType
 * @subpackage Structs
 */
class MedidasResponse extends AbstractStructBase
{
    /**
     * The MedidasResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MedidasResult;
    /**
     * Constructor method for MedidasResponse
     * @uses MedidasResponse::setMedidasResult()
     * @param string $medidasResult
     */
    public function __construct($medidasResult = null)
    {
        $this
            ->setMedidasResult($medidasResult);
    }
    /**
     * Get MedidasResult value
     * @return string|null
     */
    public function getMedidasResult()
    {
        return $this->MedidasResult;
    }
    /**
     * Set MedidasResult value
     * @param string $medidasResult
     * @return \StructType\MedidasResponse
     */
    public function setMedidasResult($medidasResult = null)
    {
        // validation for constraint: string
        if (!is_null($medidasResult) && !is_string($medidasResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medidasResult, true), gettype($medidasResult)), __LINE__);
        }
        $this->MedidasResult = $medidasResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MedidasResponse
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
