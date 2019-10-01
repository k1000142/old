<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Medidas ServiceType
 * @subpackage Services
 */
class Medidas extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Medidas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Medidas $parameters
     * @return \StructType\MedidasResponse|bool
     */
    public function Medidas(\StructType\Medidas $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Medidas($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named MedidasCon
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MedidasCon $parameters
     * @return \StructType\MedidasConResponse|bool
     */
    public function MedidasCon(\StructType\MedidasCon $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->MedidasCon($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\MedidasConResponse|\StructType\MedidasResponse
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
