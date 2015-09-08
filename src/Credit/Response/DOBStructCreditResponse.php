<?php
/**
 * File for class DOBStructCreditResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructCreditResponse originally named creditResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructCreditResponse extends DOBWsdlClass
{
    /**
     * The creditResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $creditResult;
    /**
     * The pbsresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $pbsresponse;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for creditResponse
     * @see parent::__construct()
     * @param boolean $_creditResult
     * @param int $_pbsresponse
     * @param int $_epayresponse
     * @return DOBStructCreditResponse
     */
    public function __construct($_creditResult,$_pbsresponse,$_epayresponse)
    {
        parent::__construct(array('creditResult'=>$_creditResult,'pbsresponse'=>$_pbsresponse,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get creditResult value
     * @return boolean
     */
    public function getCreditResult()
    {
        return $this->creditResult;
    }
    /**
     * Set creditResult value
     * @param boolean $_creditResult the creditResult
     * @return boolean
     */
    public function setCreditResult($_creditResult)
    {
        return ($this->creditResult = $_creditResult);
    }
    /**
     * Get pbsresponse value
     * @return int
     */
    public function getPbsresponse()
    {
        return $this->pbsresponse;
    }
    /**
     * Set pbsresponse value
     * @param int $_pbsresponse the pbsresponse
     * @return int
     */
    public function setPbsresponse($_pbsresponse)
    {
        return ($this->pbsresponse = $_pbsresponse);
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
     * @return DOBStructCreditResponse
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
