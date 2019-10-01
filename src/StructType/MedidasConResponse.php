<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedidasConResponse StructType
 * @subpackage Structs
 */
class MedidasConResponse extends AbstractStructBase
{
    /**
     * The MedidasConResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MedidasConResult;
    /**
     * Constructor method for MedidasConResponse
     * @uses MedidasConResponse::setMedidasConResult()
     * @param string $medidasConResult
     */
    public function __construct($medidasConResult = null)
    {
        $this
            ->setMedidasConResult($medidasConResult);
    }
    /**
     * Get MedidasConResult value
     * @return string|null
     */
    public function getMedidasConResult()
    {
        return $this->MedidasConResult;
    }
    /**
     * Set MedidasConResult value
     * @param string $medidasConResult
     * @return \StructType\MedidasConResponse
     */
    public function setMedidasConResult($medidasConResult = null)
    {
        // validation for constraint: string
        if (!is_null($medidasConResult) && !is_string($medidasConResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medidasConResult, true), gettype($medidasConResult)), __LINE__);
        }
        $this->MedidasConResult = $medidasConResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MedidasConResponse
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
