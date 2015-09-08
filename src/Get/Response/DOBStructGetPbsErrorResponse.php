<?php
/**
 * File for class DOBStructGetPbsErrorResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetPbsErrorResponse originally named getPbsErrorResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetPbsErrorResponse extends DOBWsdlClass
{
    /**
     * The getPbsErrorResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $getPbsErrorResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The pbsresponsestring
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $pbsresponsestring;
    /**
     * Constructor method for getPbsErrorResponse
     * @see parent::__construct()
     * @param boolean $_getPbsErrorResult
     * @param int $_epayresponse
     * @param string $_pbsresponsestring
     * @return DOBStructGetPbsErrorResponse
     */
    public function __construct($_getPbsErrorResult,$_epayresponse,$_pbsresponsestring = NULL)
    {
        parent::__construct(array('getPbsErrorResult'=>$_getPbsErrorResult,'epayresponse'=>$_epayresponse,'pbsresponsestring'=>$_pbsresponsestring),false);
    }
    /**
     * Get getPbsErrorResult value
     * @return boolean
     */
    public function getGetPbsErrorResult()
    {
        return $this->getPbsErrorResult;
    }
    /**
     * Set getPbsErrorResult value
     * @param boolean $_getPbsErrorResult the getPbsErrorResult
     * @return boolean
     */
    public function setGetPbsErrorResult($_getPbsErrorResult)
    {
        return ($this->getPbsErrorResult = $_getPbsErrorResult);
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
     * Get pbsresponsestring value
     * @return string|null
     */
    public function getPbsresponsestring()
    {
        return $this->pbsresponsestring;
    }
    /**
     * Set pbsresponsestring value
     * @param string $_pbsresponsestring the pbsresponsestring
     * @return string
     */
    public function setPbsresponsestring($_pbsresponsestring)
    {
        return ($this->pbsresponsestring = $_pbsresponsestring);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGetPbsErrorResponse
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
