<?php
/**
 * File for class DOBStructGettransaction
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGettransaction originally named gettransaction
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGettransaction extends DOBWsdlClass
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
     * The transactionid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $transactionid;
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
     * The transactionInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DOBStructTransactionInformationType
     */
    public $transactionInformation;
    /**
     * Constructor method for gettransaction
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param long $_transactionid
     * @param int $_epayresponse
     * @param string $_pwd
     * @param DOBStructTransactionInformationType $_transactionInformation
     * @return DOBStructGettransaction
     */
    public function __construct($_merchantnumber,$_transactionid,$_epayresponse,$_pwd = NULL,$_transactionInformation = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'transactionid'=>$_transactionid,'epayresponse'=>$_epayresponse,'pwd'=>$_pwd,'transactionInformation'=>$_transactionInformation),false);
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
     * Get transactionid value
     * @return long
     */
    public function getTransactionid()
    {
        return $this->transactionid;
    }
    /**
     * Set transactionid value
     * @param long $_transactionid the transactionid
     * @return long
     */
    public function setTransactionid($_transactionid)
    {
        return ($this->transactionid = $_transactionid);
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
     * Get transactionInformation value
     * @return DOBStructTransactionInformationType|null
     */
    public function getTransactionInformation()
    {
        return $this->transactionInformation;
    }
    /**
     * Set transactionInformation value
     * @param DOBStructTransactionInformationType $_transactionInformation the transactionInformation
     * @return DOBStructTransactionInformationType
     */
    public function setTransactionInformation($_transactionInformation)
    {
        return ($this->transactionInformation = $_transactionInformation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGettransaction
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
