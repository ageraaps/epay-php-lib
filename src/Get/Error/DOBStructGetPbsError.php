<?php
/**
 * File for class DOBStructGetPbsError
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetPbsError originally named getPbsError
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetPbsError extends DOBWsdlClass
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
     * The pbsresponsecode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $pbsresponsecode;
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
     * The pbsresponsestring
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $pbsresponsestring;
    /**
     * Constructor method for getPbsError
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param int $_language
     * @param int $_pbsresponsecode
     * @param int $_epayresponse
     * @param string $_pwd
     * @param string $_pbsresponsestring
     * @return DOBStructGetPbsError
     */
    public function __construct($_merchantnumber,$_language,$_pbsresponsecode,$_epayresponse,$_pwd = NULL,$_pbsresponsestring = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'language'=>$_language,'pbsresponsecode'=>$_pbsresponsecode,'epayresponse'=>$_epayresponse,'pwd'=>$_pwd,'pbsresponsestring'=>$_pbsresponsestring),false);
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
     * Get pbsresponsecode value
     * @return int
     */
    public function getPbsresponsecode()
    {
        return $this->pbsresponsecode;
    }
    /**
     * Set pbsresponsecode value
     * @param int $_pbsresponsecode the pbsresponsecode
     * @return int
     */
    public function setPbsresponsecode($_pbsresponsecode)
    {
        return ($this->pbsresponsecode = $_pbsresponsecode);
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
     * @return DOBStructGetPbsError
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
