<?php
/**
 * File for class DOBStructGetcardinfo
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetcardinfo originally named getcardinfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetcardinfo extends DOBWsdlClass
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
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $amount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $currency;
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
     * The cardno_prefix
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardno_prefix;
    /**
     * The cardtypetext
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardtypetext;
    /**
     * Constructor method for getcardinfo
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param int $_amount
     * @param int $_currency
     * @param int $_acquirer
     * @param int $_fee
     * @param DOBEnumCardType $_cardtype
     * @param int $_epayresponse
     * @param string $_cardno_prefix
     * @param string $_cardtypetext
     * @return DOBStructGetcardinfo
     */
    public function __construct($_merchantnumber,$_amount,$_currency,$_acquirer,$_fee,$_cardtype,$_epayresponse,$_cardno_prefix = NULL,$_cardtypetext = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'amount'=>$_amount,'currency'=>$_currency,'acquirer'=>$_acquirer,'fee'=>$_fee,'cardtype'=>$_cardtype,'epayresponse'=>$_epayresponse,'cardno_prefix'=>$_cardno_prefix,'cardtypetext'=>$_cardtypetext),false);
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
     * Get currency value
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param int $_currency the currency
     * @return int
     */
    public function setCurrency($_currency)
    {
        return ($this->currency = $_currency);
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
     * Get cardno_prefix value
     * @return string|null
     */
    public function getCardno_prefix()
    {
        return $this->cardno_prefix;
    }
    /**
     * Set cardno_prefix value
     * @param string $_cardno_prefix the cardno_prefix
     * @return string
     */
    public function setCardno_prefix($_cardno_prefix)
    {
        return ($this->cardno_prefix = $_cardno_prefix);
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
     * @return DOBStructGetcardinfo
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
