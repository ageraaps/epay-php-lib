<?php
/**
 * File for class DOBStructGettransactionResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGettransactionResponse originally named gettransactionResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGettransactionResponse extends DOBWsdlClass
{
    /**
     * The gettransactionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $gettransactionResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The transactionInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DOBStructTransactionInformationType
     */
    public $transactionInformation;
    /**
     * Constructor method for gettransactionResponse
     * @see parent::__construct()
     * @param boolean $_gettransactionResult
     * @param int $_epayresponse
     * @param DOBStructTransactionInformationType $_transactionInformation
     * @return DOBStructGettransactionResponse
     */
    public function __construct($_gettransactionResult,$_epayresponse,$_transactionInformation = NULL)
    {
        parent::__construct(array('gettransactionResult'=>$_gettransactionResult,'epayresponse'=>$_epayresponse,'transactionInformation'=>$_transactionInformation),false);
    }
    /**
     * Get gettransactionResult value
     * @return boolean
     */
    public function getGettransactionResult()
    {
        return $this->gettransactionResult;
    }
    /**
     * Set gettransactionResult value
     * @param boolean $_gettransactionResult the gettransactionResult
     * @return boolean
     */
    public function setGettransactionResult($_gettransactionResult)
    {
        return ($this->gettransactionResult = $_gettransactionResult);
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
     * @return DOBStructGettransactionResponse
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
