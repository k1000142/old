<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://testsolex.blulogistics.net/solex/Services/Obtenermedidas.asmx?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://testsolex.blulogistics.net/solex/Services/Obtenermedidas.asmx?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Medidas ServiceType
 */
$medidas = new \ServiceType\Medidas($options);
/**
 * Sample call for Medidas operation/method
 */
if ($medidas->Medidas(new \StructType\Medidas()) !== false) {
    print_r($medidas->getResult());
} else {
    print_r($medidas->getLastError());
}
/**
 * Sample call for MedidasCon operation/method
 */
if ($medidas->MedidasCon(new \StructType\MedidasCon()) !== false) {
    print_r($medidas->getResult());
} else {
    print_r($medidas->getLastError());
}
/**
 * Samples for Almacenamiento ServiceType
 */
$almacenamiento = new \ServiceType\Almacenamiento($options);
/**
 * Sample call for Almacenamiento operation/method
 */
if ($almacenamiento->Almacenamiento(new \StructType\Almacenamiento()) !== false) {
    print_r($almacenamiento->getResult());
} else {
    print_r($almacenamiento->getLastError());
}
