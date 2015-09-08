<?php
/**
 * File for class DOBStructMove_as_capturedResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructMove_as_capturedResponse originally named move_as_capturedResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructMove_as_capturedResponse extends DOBWsdlClass
{
    /**
     * The move_as_capturedResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $move_as_capturedResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for move_as_capturedResponse
     * @see parent::__construct()
     * @param boolean $_move_as_capturedResult
     * @param int $_epayresponse
     * @return DOBStructMove_as_capturedResponse
     */
    public function __construct($_move_as_capturedResult,$_epayresponse)
    {
        parent::__construct(array('move_as_capturedResult'=>$_move_as_capturedResult,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get move_as_capturedResult value
     * @return boolean
     */
    public function getMove_as_capturedResult()
    {
        return $this->move_as_capturedResult;
    }
    /**
     * Set move_as_capturedResult value
     * @param boolean $_move_as_capturedResult the move_as_capturedResult
     * @return boolean
     */
    public function setMove_as_capturedResult($_move_as_capturedResult)
    {
        return ($this->move_as_capturedResult = $_move_as_capturedResult);
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
     * @return DOBStructMove_as_capturedResponse
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
