<?php
/**
 * File for class DOBStructMovetransactiontogroupResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructMovetransactiontogroupResponse originally named movetransactiontogroupResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructMovetransactiontogroupResponse extends DOBWsdlClass
{
    /**
     * The movetransactiontogroupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $movetransactiontogroupResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for movetransactiontogroupResponse
     * @see parent::__construct()
     * @param boolean $_movetransactiontogroupResult
     * @param int $_epayresponse
     * @return DOBStructMovetransactiontogroupResponse
     */
    public function __construct($_movetransactiontogroupResult,$_epayresponse)
    {
        parent::__construct(array('movetransactiontogroupResult'=>$_movetransactiontogroupResult,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get movetransactiontogroupResult value
     * @return boolean
     */
    public function getMovetransactiontogroupResult()
    {
        return $this->movetransactiontogroupResult;
    }
    /**
     * Set movetransactiontogroupResult value
     * @param boolean $_movetransactiontogroupResult the movetransactiontogroupResult
     * @return boolean
     */
    public function setMovetransactiontogroupResult($_movetransactiontogroupResult)
    {
        return ($this->movetransactiontogroupResult = $_movetransactiontogroupResult);
    }
    /**
     * Get epayresponse value
     * @return int
     */
    public function getEpayresponse()
    {
        return $this->epayresponse;
    }
    /**
     * Set epayresponse value
     * @param int $_epayresponse the epayresponse
     * @return int
     */
    public function setEpayresponse($_epayresponse)
    {
        return ($this->epayresponse = $_epayresponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructMovetransactiontogroupResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
