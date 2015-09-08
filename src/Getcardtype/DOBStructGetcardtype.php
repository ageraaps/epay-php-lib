<?php
/**
 * File for class DOBStructGetcardtype
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetcardtype originally named getcardtype
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetcardtype extends DOBWsdlClass
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
     * The cardtypeid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $cardtypeid;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The cardnumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardnumber;
    /**
     * The cardname
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardname;
    /**
     * Constructor method for getcardtype
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param int $_cardtypeid
     * @param int $_epayresponse
     * @param string $_cardnumber
     * @param string $_cardname
     * @return DOBStructGetcardtype
     */
    public function __construct($_merchantnumber,$_cardtypeid,$_epayresponse,$_cardnumber = NULL,$_cardname = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'cardtypeid'=>$_cardtypeid,'epayresponse'=>$_epayresponse,'cardnumber'=>$_cardnumber,'cardname'=>$_cardname),false);
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
     * Get cardtypeid value
     * @return int
     */
    public function getCardtypeid()
    {
        return $this->cardtypeid;
    }
    /**
     * Set cardtypeid value
     * @param int $_cardtypeid the cardtypeid
     * @return int
     */
    public function setCardtypeid($_cardtypeid)
    {
        return ($this->cardtypeid = $_cardtypeid);
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
     * Get cardnumber value
     * @return string|null
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }
    /**
     * Set cardnumber value
     * @param string $_cardnumber the cardnumber
     * @return string
     */
    public function setCardnumber($_cardnumber)
    {
        return ($this->cardnumber = $_cardnumber);
    }
    /**
     * Get cardname value
     * @return string|null
     */
    public function getCardname()
    {
        return $this->cardname;
    }
    /**
     * Set cardname value
     * @param string $_cardname the cardname
     * @return string
     */
    public function setCardname($_cardname)
    {
        return ($this->cardname = $_cardname);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructGetcardtype
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
