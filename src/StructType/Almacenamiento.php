<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Almacenamiento StructType
 * @subpackage Structs
 */
class Almacenamiento extends AbstractStructBase
{
    /**
     * The Unidades
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Unidades;
    /**
     * The PesoKv
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PesoKv;
    /**
     * The PesoKG
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PesoKG;
    /**
     * The TotalPeso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalPeso;
    /**
     * The TotalPesoKV
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalPesoKV;
    /**
     * The Remision
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Remision;
    /**
     * Constructor method for Almacenamiento
     * @uses Almacenamiento::setUnidades()
     * @uses Almacenamiento::setPesoKv()
     * @uses Almacenamiento::setPesoKG()
     * @uses Almacenamiento::setTotalPeso()
     * @uses Almacenamiento::setTotalPesoKV()
     * @uses Almacenamiento::setRemision()
     * @param float $unidades
     * @param float $pesoKv
     * @param float $pesoKG
     * @param float $totalPeso
     * @param float $totalPesoKV
     * @param string $remision
     */
    public function __construct($unidades = null, $pesoKv = null, $pesoKG = null, $totalPeso = null, $totalPesoKV = null, $remision = null)
    {
        $this
            ->setUnidades($unidades)
            ->setPesoKv($pesoKv)
            ->setPesoKG($pesoKG)
            ->setTotalPeso($totalPeso)
            ->setTotalPesoKV($totalPesoKV)
            ->setRemision($remision);
    }
    /**
     * Get Unidades value
     * @return float
     */
    public function getUnidades()
    {
        return $this->Unidades;
    }
    /**
     * Set Unidades value
     * @param float $unidades
     * @return \StructType\Almacenamiento
     */
    public function setUnidades($unidades = null)
    {
        // validation for constraint: float
        if (!is_null($unidades) && !(is_float($unidades) || is_numeric($unidades))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unidades, true), gettype($unidades)), __LINE__);
        }
        $this->Unidades = $unidades;
        return $this;
    }
    /**
     * Get PesoKv value
     * @return float
     */
    public function getPesoKv()
    {
        return $this->PesoKv;
    }
    /**
     * Set PesoKv value
     * @param float $pesoKv
     * @return \StructType\Almacenamiento
     */
    public function setPesoKv($pesoKv = null)
    {
        // validation for constraint: float
        if (!is_null($pesoKv) && !(is_float($pesoKv) || is_numeric($pesoKv))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pesoKv, true), gettype($pesoKv)), __LINE__);
        }
        $this->PesoKv = $pesoKv;
        return $this;
    }
    /**
     * Get PesoKG value
     * @return float
     */
    public function getPesoKG()
    {
        return $this->PesoKG;
    }
    /**
     * Set PesoKG value
     * @param float $pesoKG
     * @return \StructType\Almacenamiento
     */
    public function setPesoKG($pesoKG = null)
    {
        // validation for constraint: float
        if (!is_null($pesoKG) && !(is_float($pesoKG) || is_numeric($pesoKG))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pesoKG, true), gettype($pesoKG)), __LINE__);
        }
        $this->PesoKG = $pesoKG;
        return $this;
    }
    /**
     * Get TotalPeso value
     * @return float
     */
    public function getTotalPeso()
    {
        return $this->TotalPeso;
    }
    /**
     * Set TotalPeso value
     * @param float $totalPeso
     * @return \StructType\Almacenamiento
     */
    public function setTotalPeso($totalPeso = null)
    {
        // validation for constraint: float
        if (!is_null($totalPeso) && !(is_float($totalPeso) || is_numeric($totalPeso))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPeso, true), gettype($totalPeso)), __LINE__);
        }
        $this->TotalPeso = $totalPeso;
        return $this;
    }
    /**
     * Get TotalPesoKV value
     * @return float
     */
    public function getTotalPesoKV()
    {
        return $this->TotalPesoKV;
    }
    /**
     * Set TotalPesoKV value
     * @param float $totalPesoKV
     * @return \StructType\Almacenamiento
     */
    public function setTotalPesoKV($totalPesoKV = null)
    {
        // validation for constraint: float
        if (!is_null($totalPesoKV) && !(is_float($totalPesoKV) || is_numeric($totalPesoKV))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPesoKV, true), gettype($totalPesoKV)), __LINE__);
        }
        $this->TotalPesoKV = $totalPesoKV;
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
     * @return \StructType\Almacenamiento
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Almacenamiento
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
