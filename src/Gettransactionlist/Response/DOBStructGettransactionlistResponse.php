<?php
/**
 * File for class DOBStructGettransactionlistResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGettransactionlistResponse originally named gettransactionlistResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGettransactionlistResponse extends DOBWsdlClass
{
    /**
     * The gettransactionlistResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $gettransactionlistResult;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The transactionInformationAry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DOBStructArrayOfTransactionInformationType
     */
    public $transactionInformationAry;
    /**
     * Constructor method for gettransactionlistResponse
     * @see parent::__construct()
     * @param boolean $_gettransactionlistResult
     * @param int $_epayresponse
     * @param DOBStructArrayOfTransactionInformationType $_transactionInformationAry
     * @return DOBStructGettransactionlistResponse
     */
    public function __construct($_gettransactionlistResult,$_epayresponse,$_transactionInformationAry = NULL)
    {
        parent::__construct(array('gettransactionlistResult'=>$_gettransactionlistResult,'epayresponse'=>$_epayresponse,'transactionInformationAry'=>($_transactionInformationAry instanceof DOBStructArrayOfTransactionInformationType)?$_transactionInformationAry:new DOBStructArrayOfTransactionInformationType($_transactionInformationAry)),false);
    }
    /**
     * Get gettransactionlistResult value
     * @return boolean
     */
    public function getGettransactionlistResult()
    {
        return $this->gettransactionlistResult;
    }
    /**
     * Set gettransactionlistResult value
     * @param boolean $_gettransactionlistResult the gettransactionlistResult
     * @return boolean
     */
    public function setGettransactionlistResult($_gettransactionlistResult)
    {
        return ($this->gettransactionlistResult = $_gettransactionlistResult);
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
     * Get transactionInformationAry value
     * @return DOBStructArrayOfTransactionInformationType|null
     */
    public function getTransactionInformationAry()
    {
        return $this->transactionInformationAry;
    }
    /**
     * Set transactionInformationAry value
     * @param DOBStructArrayOfTransactionInformationType $_transactionInformationAry the transactionInformationAry
     * @return DOBStructArrayOfTransactionInformationType
     */
    public function setTransactionInformationAry($_transactionInformationAry)
    {
        return ($this->transactionInformationAry = $_transactionInformationAry);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGettransactionlistResponse
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
