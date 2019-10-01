<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedidasCon StructType
 * @subpackage Structs
 */
class MedidasCon extends AbstractStructBase
{
    /**
     * The Altura
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Altura;
    /**
     * The Ancho
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Ancho;
    /**
     * The Largo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Largo;
    /**
     * The Volumen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Volumen;
    /**
     * The PesoVolumen
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PesoVolumen;
    /**
     * The Peso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Peso;
    /**
     * The Cajas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Cajas;
    /**
     * The Remision
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Remision;
    /**
     * The base64String
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $base64String;
    /**
     * The namepc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $namepc;
    /**
     * The Usuario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Usuario;
    /**
     * Constructor method for MedidasCon
     * @uses MedidasCon::setAltura()
     * @uses MedidasCon::setAncho()
     * @uses MedidasCon::setLargo()
     * @uses MedidasCon::setVolumen()
     * @uses MedidasCon::setPesoVolumen()
     * @uses MedidasCon::setPeso()
     * @uses MedidasCon::setCajas()
     * @uses MedidasCon::setRemision()
     * @uses MedidasCon::setBase64String()
     * @uses MedidasCon::setNamepc()
     * @uses MedidasCon::setUsuario()
     * @param float $altura
     * @param float $ancho
     * @param float $largo
     * @param float $volumen
     * @param float $pesoVolumen
     * @param float $peso
     * @param int $cajas
     * @param string $remision
     * @param string $base64String
     * @param string $namepc
     * @param string $usuario
     */
    public function __construct($altura = null, $ancho = null, $largo = null, $volumen = null, $pesoVolumen = null, $peso = null, $cajas = null, $remision = null, $base64String = null, $namepc = null, $usuario = null)
    {
        $this
            ->setAltura($altura)
            ->setAncho($ancho)
            ->setLargo($largo)
            ->setVolumen($volumen)
            ->setPesoVolumen($pesoVolumen)
            ->setPeso($peso)
            ->setCajas($cajas)
            ->setRemision($remision)
            ->setBase64String($base64String)
            ->setNamepc($namepc)
            ->setUsuario($usuario);
    }
    /**
     * Get Altura value
     * @return float
     */
    public function getAltura()
    {
        return $this->Altura;
    }
    /**
     * Set Altura value
     * @param float $altura
     * @return \StructType\MedidasCon
     */
    public function setAltura($altura = null)
    {
        // validation for constraint: float
        if (!is_null($altura) && !(is_float($altura) || is_numeric($altura))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($altura, true), gettype($altura)), __LINE__);
        }
        $this->Altura = $altura;
        return $this;
    }
    /**
     * Get Ancho value
     * @return float
     */
    public function getAncho()
    {
        return $this->Ancho;
    }
    /**
     * Set Ancho value
     * @param float $ancho
     * @return \StructType\MedidasCon
     */
    public function setAncho($ancho = null)
    {
        // validation for constraint: float
        if (!is_null($ancho) && !(is_float($ancho) || is_numeric($ancho))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ancho, true), gettype($ancho)), __LINE__);
        }
        $this->Ancho = $ancho;
        return $this;
    }
    /**
     * Get Largo value
     * @return float
     */
    public function getLargo()
    {
        return $this->Largo;
    }
    /**
     * Set Largo value
     * @param float $largo
     * @return \StructType\MedidasCon
     */
    public function setLargo($largo = null)
    {
        // validation for constraint: float
        if (!is_null($largo) && !(is_float($largo) || is_numeric($largo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largo, true), gettype($largo)), __LINE__);
        }
        $this->Largo = $largo;
        return $this;
    }
    /**
     * Get Volumen value
     * @return float
     */
    public function getVolumen()
    {
        return $this->Volumen;
    }
    /**
     * Set Volumen value
     * @param float $volumen
     * @return \StructType\MedidasCon
     */
    public function setVolumen($volumen = null)
    {
        // validation for constraint: float
        if (!is_null($volumen) && !(is_float($volumen) || is_numeric($volumen))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volumen, true), gettype($volumen)), __LINE__);
        }
        $this->Volumen = $volumen;
        return $this;
    }
    /**
     * Get PesoVolumen value
     * @return float
     */
    public function getPesoVolumen()
    {
        return $this->PesoVolumen;
    }
    /**
     * Set PesoVolumen value
     * @param float $pesoVolumen
     * @return \StructType\MedidasCon
     */
    public function setPesoVolumen($pesoVolumen = null)
    {
        // validation for constraint: float
        if (!is_null($pesoVolumen) && !(is_float($pesoVolumen) || is_numeric($pesoVolumen))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pesoVolumen, true), gettype($pesoVolumen)), __LINE__);
        }
        $this->PesoVolumen = $pesoVolumen;
        return $this;
    }
    /**
     * Get Peso value
     * @return float
     */
    public function getPeso()
    {
        return $this->Peso;
    }
    /**
     * Set Peso value
     * @param float $peso
     * @return \StructType\MedidasCon
     */
    public function setPeso($peso = null)
    {
        // validation for constraint: float
        if (!is_null($peso) && !(is_float($peso) || is_numeric($peso))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($peso, true), gettype($peso)), __LINE__);
        }
        $this->Peso = $peso;
        return $this;
    }
    /**
     * Get Cajas value
     * @return int
     */
    public function getCajas()
    {
        return $this->Cajas;
    }
    /**
     * Set Cajas value
     * @param int $cajas
     * @return \StructType\MedidasCon
     */
    public function setCajas($cajas = null)
    {
        // validation for constraint: int
        if (!is_null($cajas) && !(is_int($cajas) || ctype_digit($cajas))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cajas, true), gettype($cajas)), __LINE__);
        }
        $this->Cajas = $cajas;
        return $this;
    }
    /**
     * Get Remision value
     * @return string|null
     */
    public function getRemision()
    {
        return $this->Remision;
    }
    /**
     * Set Remision value
     * @param string $remision
     * @return \StructType\MedidasCon
     */
    public function setRemision($remision = null)
    {
        // validation for constraint: string
        if (!is_null($remision) && !is_string($remision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remision, true), gettype($remision)), __LINE__);
        }
        $this->Remision = $remision;
        return $this;
    }
    /**
     * Get base64String value
     * @return string|null
     */
    public function getBase64String()
    {
        return $this->base64String;
    }
    /**
     * Set base64String value
     * @param string $base64String
     * @return \StructType\MedidasCon
     */
    public function setBase64String($base64String = null)
    {
        // validation for constraint: string
        if (!is_null($base64String) && !is_string($base64String)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base64String, true), gettype($base64String)), __LINE__);
        }
        $this->base64String = $base64String;
        return $this;
    }
    /**
     * Get namepc value
     * @return string|null
     */
    public function getNamepc()
    {
        return $this->namepc;
    }
    /**
     * Set namepc value
     * @param string $namepc
     * @return \StructType\MedidasCon
     */
    public function setNamepc($namepc = null)
    {
        // validation for constraint: string
        if (!is_null($namepc) && !is_string($namepc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namepc, true), gettype($namepc)), __LINE__);
        }
        $this->namepc = $namepc;
        return $this;
    }
    /**
     * Get Usuario value
     * @return string|null
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }
    /**
     * Set Usuario value
     * @param string $usuario
     * @return \StructType\MedidasCon
     */
    public function setUsuario($usuario = null)
    {
        // validation for constraint: string
        if (!is_null($usuario) && !is_string($usuario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usuario, true), gettype($usuario)), __LINE__);
        }
        $this->Usuario = $usuario;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MedidasCon
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
