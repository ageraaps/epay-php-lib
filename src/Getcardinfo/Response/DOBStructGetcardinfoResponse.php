<?php
/**
 * File for class DOBStructGetcardinfoResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetcardinfoResponse originally named getcardinfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetcardinfoResponse extends DOBWsdlClass
{
    /**
     * The getcardinfoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $getcardinfoResult;
    /**
     * The acquirer
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $acquirer;
    /**
     * The fee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $fee;
    /**
     * The cardtype
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var DOBEnumCardType
     */
    public $cardtype;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The cardtypetext
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardtypetext;
    /**
     * Constructor method for getcardinfoResponse
     * @see parent::__construct()
     * @param boolean $_getcardinfoResult
     * @param int $_acquirer
     * @param int $_fee
     * @param DOBEnumCardType $_cardtype
     * @param int $_epayresponse
     * @param string $_cardtypetext
     * @return DOBStructGetcardinfoResponse
     */
    public function __construct($_getcardinfoResult,$_acquirer,$_fee,$_cardtype,$_epayresponse,$_cardtypetext = NULL)
    {
        parent::__construct(array('getcardinfoResult'=>$_getcardinfoResult,'acquirer'=>$_acquirer,'fee'=>$_fee,'cardtype'=>$_cardtype,'epayresponse'=>$_epayresponse,'cardtypetext'=>$_cardtypetext),false);
    }
    /**
     * Get getcardinfoResult value
     * @return boolean
     */
    public function getGetcardinfoResult()
    {
        return $this->getcardinfoResult;
    }
    /**
     * Set getcardinfoResult value
     * @param boolean $_getcardinfoResult the getcardinfoResult
     * @return boolean
     */
    public function setGetcardinfoResult($_getcardinfoResult)
    {
        return ($this->getcardinfoResult = $_getcardinfoResult);
    }
    /**
     * Get acquirer value
     * @return int
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }
    /**
     * Set acquirer value
     * @param int $_acquirer the acquirer
     * @return int
     */
    public function setAcquirer($_acquirer)
    {
        return ($this->acquirer = $_acquirer);
    }
    /**
     * Get fee value
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }
    /**
     * Set fee value
     * @param int $_fee the fee
     * @return int
     */
    public function setFee($_fee)
    {
        return ($this->fee = $_fee);
    }
    /**
     * Get cardtype value
     * @return DOBEnumCardType
     */
    public function getCardtype()
    {
        return $this->cardtype;
    }
    /**
     * Set cardtype value
     * @uses DOBEnumCardType::valueIsValid()
     * @param DOBEnumCardType $_cardtype the cardtype
     * @return DOBEnumCardType
     */
    public function setCardtype($_cardtype)
    {
        if(!DOBEnumCardType::valueIsValid($_cardtype))
        {
            return false;
        }
        return ($this->cardtype = $_cardtype);
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
     * Get cardtypetext value
     * @return string|null
     */
    public function getCardtypetext()
    {
        return $this->cardtypetext;
    }
    /**
     * Set cardtypetext value
     * @param string $_cardtypetext the cardtypetext
     * @return string
     */
    public function setCardtypetext($_cardtypetext)
    {
        return ($this->cardtypetext = $_cardtypetext);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGetcardinfoResponse
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
