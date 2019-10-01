<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Medidas' => '\\StructType\\Medidas',
            'MedidasResponse' => '\\StructType\\MedidasResponse',
            'MedidasCon' => '\\StructType\\MedidasCon',
            'MedidasConResponse' => '\\StructType\\MedidasConResponse',
            'Almacenamiento' => '\\StructType\\Almacenamiento',
            'AlmacenamientoResponse' => '\\StructType\\AlmacenamientoResponse',
            'ArrayOfAlmacenamiento' => '\\ArrayType\\ArrayOfAlmacenamiento',
        );
    }
}
