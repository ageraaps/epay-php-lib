<?php
/**
 * File for class DOBStructCapture
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructCapture originally named capture
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructCapture extends DOBWsdlClass
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
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $amount;
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
     * The group
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $group;
    /**
     * The pwd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $pwd;
    /**
     * The invoice
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $invoice;
    /**
     * Constructor method for capture
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param long $_transactionid
     * @param int $_amount
     * @param int $_pbsResponse
     * @param int $_epayresponse
     * @param string $_group
     * @param string $_pwd
     * @param string $_invoice
     * @return DOBStructCapture
     */
    public function __construct($_merchantnumber,$_transactionid,$_amount,$_pbsResponse,$_epayresponse,$_group = NULL,$_pwd = NULL,$_invoice = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'transactionid'=>$_transactionid,'amount'=>$_amount,'pbsResponse'=>$_pbsResponse,'epayresponse'=>$_epayresponse,'group'=>$_group,'pwd'=>$_pwd,'invoice'=>$_invoice),false);
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
     * Get amount value
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $_amount the amount
     * @return int
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
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
     * Get group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $_group the group
     * @return string
     */
    public function setGroup($_group)
    {
        return ($this->group = $_group);
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
     * Get invoice value
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
    /**
     * Set invoice value
     * @param string $_invoice the invoice
     * @return string
     */
    public function setInvoice($_invoice)
    {
        return ($this->invoice = $_invoice);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructCapture
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
