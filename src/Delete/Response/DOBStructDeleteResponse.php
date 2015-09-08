<?php
/**
 * File for class DOBStructDeleteResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructDeleteResponse originally named deleteResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructDeleteResponse extends DOBWsdlClass
{
    /**
     * The deleteResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $deleteResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for deleteResponse
     * @see parent::__construct()
     * @param boolean $_deleteResult
     * @param int $_epayresponse
     * @return DOBStructDeleteResponse
     */
    public function __construct($_deleteResult,$_epayresponse)
    {
        parent::__construct(array('deleteResult'=>$_deleteResult,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get deleteResult value
     * @return boolean
     */
    public function getDeleteResult()
    {
        return $this->deleteResult;
    }
    /**
     * Set deleteResult value
     * @param boolean $_deleteResult the deleteResult
     * @return boolean
     */
    public function setDeleteResult($_deleteResult)
    {
        return ($this->deleteResult = $_deleteResult);
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
     * @return DOBStructDeleteResponse
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
