<?php
/**
 * File for class DOBStructGetEpayErrorResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetEpayErrorResponse originally named getEpayErrorResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetEpayErrorResponse extends DOBWsdlClass
{
    /**
     * The getEpayErrorResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $getEpayErrorResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The epayresponsestring
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $epayresponsestring;
    /**
     * Constructor method for getEpayErrorResponse
     * @see parent::__construct()
     * @param boolean $_getEpayErrorResult
     * @param int $_epayresponse
     * @param string $_epayresponsestring
     * @return DOBStructGetEpayErrorResponse
     */
    public function __construct($_getEpayErrorResult,$_epayresponse,$_epayresponsestring = NULL)
    {
        parent::__construct(array('getEpayErrorResult'=>$_getEpayErrorResult,'epayresponse'=>$_epayresponse,'epayresponsestring'=>$_epayresponsestring),false);
    }
    /**
     * Get getEpayErrorResult value
     * @return boolean
     */
    public function getGetEpayErrorResult()
    {
        return $this->getEpayErrorResult;
    }
    /**
     * Set getEpayErrorResult value
     * @param boolean $_getEpayErrorResult the getEpayErrorResult
     * @return boolean
     */
    public function setGetEpayErrorResult($_getEpayErrorResult)
    {
        return ($this->getEpayErrorResult = $_getEpayErrorResult);
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
     * Get epayresponsestring value
     * @return string|null
     */
    public function getEpayresponsestring()
    {
        return $this->epayresponsestring;
    }
    /**
     * Set epayresponsestring value
     * @param string $_epayresponsestring the epayresponsestring
     * @return string
     */
    public function setEpayresponsestring($_epayresponsestring)
    {
        return ($this->epayresponsestring = $_epayresponsestring);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGetEpayErrorResponse
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
