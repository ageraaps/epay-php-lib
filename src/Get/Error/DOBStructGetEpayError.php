<?php
/**
 * File for class DOBStructGetEpayError
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetEpayError originally named getEpayError
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetEpayError extends DOBWsdlClass
{
    /**
     * The merchantnumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $merchantnumber;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $language;
    /**
     * The epayresponsecode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponsecode;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The pwd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $pwd;
    /**
     * The epayresponsestring
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $epayresponsestring;
    /**
     * Constructor method for getEpayError
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param int $_language
     * @param int $_epayresponsecode
     * @param int $_epayresponse
     * @param string $_pwd
     * @param string $_epayresponsestring
     * @return DOBStructGetEpayError
     */
    public function __construct($_merchantnumber,$_language,$_epayresponsecode,$_epayresponse,$_pwd = NULL,$_epayresponsestring = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'language'=>$_language,'epayresponsecode'=>$_epayresponsecode,'epayresponse'=>$_epayresponse,'pwd'=>$_pwd,'epayresponsestring'=>$_epayresponsestring),false);
    }
    /**
     * Get merchantnumber value
     * @return int
     */
    public function getMerchantnumber()
    {
        return $this->merchantnumber;
    }
    /**
     * Set merchantnumber value
     * @param int $_merchantnumber the merchantnumber
     * @return int
     */
    public function setMerchantnumber($_merchantnumber)
    {
        return ($this->merchantnumber = $_merchantnumber);
    }
    /**
     * Get language value
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param int $_language the language
     * @return int
     */
    public function setLanguage($_language)
    {
        return ($this->language = $_language);
    }
    /**
     * Get epayresponsecode value
     * @return int
     */
    public function getEpayresponsecode()
    {
        return $this->epayresponsecode;
    }
    /**
     * Set epayresponsecode value
     * @param int $_epayresponsecode the epayresponsecode
     * @return int
     */
    public function setEpayresponsecode($_epayresponsecode)
    {
        return ($this->epayresponsecode = $_epayresponsecode);
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
     * Get pwd value
     * @return string|null
     */
    public function getPwd()
    {
        return $this->pwd;
    }
    /**
     * Set pwd value
     * @param string $_pwd the pwd
     * @return string
     */
    public function setPwd($_pwd)
    {
        return ($this->pwd = $_pwd);
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
     * @return DOBStructGetEpayError
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
