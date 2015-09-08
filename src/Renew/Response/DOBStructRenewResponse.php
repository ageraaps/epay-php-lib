<?php
/**
 * File for class DOBStructRenewResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructRenewResponse originally named renewResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructRenewResponse extends DOBWsdlClass
{
    /**
     * The renewResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $renewResult;
    /**
     * The pbsResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $pbsResponse;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for renewResponse
     * @see parent::__construct()
     * @param boolean $_renewResult
     * @param int $_pbsResponse
     * @param int $_epayresponse
     * @return DOBStructRenewResponse
     */
    public function __construct($_renewResult,$_pbsResponse,$_epayresponse)
    {
        parent::__construct(array('renewResult'=>$_renewResult,'pbsResponse'=>$_pbsResponse,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get renewResult value
     * @return boolean
     */
    public function getRenewResult()
    {
        return $this->renewResult;
    }
    /**
     * Set renewResult value
     * @param boolean $_renewResult the renewResult
     * @return boolean
     */
    public function setRenewResult($_renewResult)
    {
        return ($this->renewResult = $_renewResult);
    }
    /**
     * Get pbsResponse value
     * @return int
     */
    public function getPbsResponse()
    {
        return $this->pbsResponse;
    }
    /**
     * Set pbsResponse value
     * @param int $_pbsResponse the pbsResponse
     * @return int
     */
    public function setPbsResponse($_pbsResponse)
    {
        return ($this->pbsResponse = $_pbsResponse);
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
     * @return DOBStructRenewResponse
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
