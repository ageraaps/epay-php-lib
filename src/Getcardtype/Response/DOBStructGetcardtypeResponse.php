<?php
/**
 * File for class DOBStructGetcardtypeResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGetcardtypeResponse originally named getcardtypeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGetcardtypeResponse extends DOBWsdlClass
{
    /**
     * The getcardtypeResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $getcardtypeResult;
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
     * The cardname
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardname;
    /**
     * Constructor method for getcardtypeResponse
     * @see parent::__construct()
     * @param boolean $_getcardtypeResult
     * @param int $_cardtypeid
     * @param int $_epayresponse
     * @param string $_cardname
     * @return DOBStructGetcardtypeResponse
     */
    public function __construct($_getcardtypeResult,$_cardtypeid,$_epayresponse,$_cardname = NULL)
    {
        parent::__construct(array('getcardtypeResult'=>$_getcardtypeResult,'cardtypeid'=>$_cardtypeid,'epayresponse'=>$_epayresponse,'cardname'=>$_cardname),false);
    }
    /**
     * Get getcardtypeResult value
     * @return boolean
     */
    public function getGetcardtypeResult()
    {
        return $this->getcardtypeResult;
    }
    /**
     * Set getcardtypeResult value
     * @param boolean $_getcardtypeResult the getcardtypeResult
     * @return boolean
     */
    public function setGetcardtypeResult($_getcardtypeResult)
    {
        return ($this->getcardtypeResult = $_getcardtypeResult);
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
     * @return DOBStructGetcardtypeResponse
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
