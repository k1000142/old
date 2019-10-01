<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Almacenamiento ServiceType
 * @subpackage Services
 */
class Almacenamiento extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Almacenamiento
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Almacenamiento $parameters
     * @return \StructType\AlmacenamientoResponse|bool
     */
    public function Almacenamiento(\StructType\Almacenamiento $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Almacenamiento($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AlmacenamientoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
