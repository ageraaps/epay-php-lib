<?php
/**
 * File for class DOBStructTransactionInformationType
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructTransactionInformationType originally named TransactionInformationType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructTransactionInformationType extends DOBWsdlClass
{
    /**
     * The authamount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $authamount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $currency;
    /**
     * The cardtypeid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $cardtypeid;
    /**
     * The capturedamount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $capturedamount;
    /**
     * The creditedamount
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $creditedamount;
    /**
     * The authdate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $authdate;
    /**
     * The captureddate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $captureddate;
    /**
     * The deleteddate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $deleteddate;
    /**
     * The crediteddate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $crediteddate;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var DOBEnumTransactionStatus
     */
    public $status;
    /**
     * The transactionid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $transactionid;
    /**
     * The mode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var DOBEnumPayMode
     */
    public $mode;
    /**
     * The msc
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $msc;
    /**
     * The fraudStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $fraudStatus;
    /**
     * The fee
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $fee;
    /**
     * The splitpayment
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $splitpayment;
    /**
     * The acquirer
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var DOBEnumAcquirerType
     */
    public $acquirer;
    /**
     * The expmonth
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $expmonth;
    /**
     * The expyear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $expyear;
    /**
     * The group
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $group;
    /**
     * The orderid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $orderid;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $description;
    /**
     * The history
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DOBStructArrayOfTransactionHistoryInfo
     */
    public $history;
    /**
     * The cardholder
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $cardholder;
    /**
     * The FraudMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FraudMessage;
    /**
     * The payerCountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $payerCountryCode;
    /**
     * The issuedCountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $issuedCountryCode;
    /**
     * The tcardno
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $tcardno;
    /**
     * Constructor method for TransactionInformationType
     * @see parent::__construct()
     * @param int $_authamount
     * @param int $_currency
     * @param int $_cardtypeid
     * @param int $_capturedamount
     * @param int $_creditedamount
     * @param dateTime $_authdate
     * @param dateTime $_captureddate
     * @param dateTime $_deleteddate
     * @param dateTime $_crediteddate
     * @param DOBEnumTransactionStatus $_status
     * @param long $_transactionid
     * @param DOBEnumPayMode $_mode
     * @param boolean $_msc
     * @param int $_fraudStatus
     * @param int $_fee
     * @param boolean $_splitpayment
     * @param DOBEnumAcquirerType $_acquirer
     * @param int $_expmonth
     * @param int $_expyear
     * @param string $_group
     * @param string $_orderid
     * @param string $_description
     * @param DOBStructArrayOfTransactionHistoryInfo $_history
     * @param string $_cardholder
     * @param string $_fraudMessage
     * @param string $_payerCountryCode
     * @param string $_issuedCountryCode
     * @param string $_tcardno
     * @return DOBStructTransactionInformationType
     */
    public function __construct($_authamount,$_currency,$_cardtypeid,$_capturedamount,$_creditedamount,$_authdate,$_captureddate,$_deleteddate,$_crediteddate,$_status,$_transactionid,$_mode,$_msc,$_fraudStatus,$_fee,$_splitpayment,$_acquirer,$_expmonth,$_expyear,$_group = NULL,$_orderid = NULL,$_description = NULL,$_history = NULL,$_cardholder = NULL,$_fraudMessage = NULL,$_payerCountryCode = NULL,$_issuedCountryCode = NULL,$_tcardno = NULL)
    {
        parent::__construct(array('authamount'=>$_authamount,'currency'=>$_currency,'cardtypeid'=>$_cardtypeid,'capturedamount'=>$_capturedamount,'creditedamount'=>$_creditedamount,'authdate'=>$_authdate,'captureddate'=>$_captureddate,'deleteddate'=>$_deleteddate,'crediteddate'=>$_crediteddate,'status'=>$_status,'transactionid'=>$_transactionid,'mode'=>$_mode,'msc'=>$_msc,'fraudStatus'=>$_fraudStatus,'fee'=>$_fee,'splitpayment'=>$_splitpayment,'acquirer'=>$_acquirer,'expmonth'=>$_expmonth,'expyear'=>$_expyear,'group'=>$_group,'orderid'=>$_orderid,'description'=>$_description,'history'=>($_history instanceof DOBStructArrayOfTransactionHistoryInfo)?$_history:new DOBStructArrayOfTransactionHistoryInfo($_history),'cardholder'=>$_cardholder,'FraudMessage'=>$_fraudMessage,'payerCountryCode'=>$_payerCountryCode,'issuedCountryCode'=>$_issuedCountryCode,'tcardno'=>$_tcardno),false);
    }
    /**
     * Get authamount value
     * @return int
     */
    public function getAuthamount()
    {
        return $this->authamount;
    }
    /**
     * Set authamount value
     * @param int $_authamount the authamount
     * @return int
     */
    public function setAuthamount($_authamount)
    {
        return ($this->authamount = $_authamount);
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
     * Get capturedamount value
     * @return int
     */
    public function getCapturedamount()
    {
        return $this->capturedamount;
    }
    /**
     * Set capturedamount value
     * @param int $_capturedamount the capturedamount
     * @return int
     */
    public function setCapturedamount($_capturedamount)
    {
        return ($this->capturedamount = $_capturedamount);
    }
    /**
     * Get creditedamount value
     * @return int
     */
    public function getCreditedamount()
    {
        return $this->creditedamount;
    }
    /**
     * Set creditedamount value
     * @param int $_creditedamount the creditedamount
     * @return int
     */
    public function setCreditedamount($_creditedamount)
    {
        return ($this->creditedamount = $_creditedamount);
    }
    /**
     * Get authdate value
     * @return dateTime
     */
    public function getAuthdate()
    {
        return $this->authdate;
    }
    /**
     * Set authdate value
     * @param dateTime $_authdate the authdate
     * @return dateTime
     */
    public function setAuthdate($_authdate)
    {
        return ($this->authdate = $_authdate);
    }
    /**
     * Get captureddate value
     * @return dateTime
     */
    public function getCaptureddate()
    {
        return $this->captureddate;
    }
    /**
     * Set captureddate value
     * @param dateTime $_captureddate the captureddate
     * @return dateTime
     */
    public function setCaptureddate($_captureddate)
    {
        return ($this->captureddate = $_captureddate);
    }
    /**
     * Get deleteddate value
     * @return dateTime
     */
    public function getDeleteddate()
    {
        return $this->deleteddate;
    }
    /**
     * Set deleteddate value
     * @param dateTime $_deleteddate the deleteddate
     * @return dateTime
     */
    public function setDeleteddate($_deleteddate)
    {
        return ($this->deleteddate = $_deleteddate);
    }
    /**
     * Get crediteddate value
     * @return dateTime
     */
    public function getCrediteddate()
    {
        return $this->crediteddate;
    }
    /**
     * Set crediteddate value
     * @param dateTime $_crediteddate the crediteddate
     * @return dateTime
     */
    public function setCrediteddate($_crediteddate)
    {
        return ($this->crediteddate = $_crediteddate);
    }
    /**
     * Get status value
     * @return DOBEnumTransactionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses DOBEnumTransactionStatus::valueIsValid()
     * @param DOBEnumTransactionStatus $_status the status
     * @return DOBEnumTransactionStatus
     */
    public function setStatus($_status)
    {
        if(!DOBEnumTransactionStatus::valueIsValid($_status))
        {
            return false;
        }
        return ($this->status = $_status);
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
     * Get mode value
     * @return DOBEnumPayMode
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @uses DOBEnumPayMode::valueIsValid()
     * @param DOBEnumPayMode $_mode the mode
     * @return DOBEnumPayMode
     */
    public function setMode($_mode)
    {
        if(!DOBEnumPayMode::valueIsValid($_mode))
        {
            return false;
        }
        return ($this->mode = $_mode);
    }
    /**
     * Get msc value
     * @return boolean
     */
    public function getMsc()
    {
        return $this->msc;
    }
    /**
     * Set msc value
     * @param boolean $_msc the msc
     * @return boolean
     */
    public function setMsc($_msc)
    {
        return ($this->msc = $_msc);
    }
    /**
     * Get fraudStatus value
     * @return int
     */
    public function getFraudStatus()
    {
        return $this->fraudStatus;
    }
    /**
     * Set fraudStatus value
     * @param int $_fraudStatus the fraudStatus
     * @return int
     */
    public function setFraudStatus($_fraudStatus)
    {
        return ($this->fraudStatus = $_fraudStatus);
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
     * Get splitpayment value
     * @return boolean
     */
    public function getSplitpayment()
    {
        return $this->splitpayment;
    }
    /**
     * Set splitpayment value
     * @param boolean $_splitpayment the splitpayment
     * @return boolean
     */
    public function setSplitpayment($_splitpayment)
    {
        return ($this->splitpayment = $_splitpayment);
    }
    /**
     * Get acquirer value
     * @return DOBEnumAcquirerType
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }
    /**
     * Set acquirer value
     * @uses DOBEnumAcquirerType::valueIsValid()
     * @param DOBEnumAcquirerType $_acquirer the acquirer
     * @return DOBEnumAcquirerType
     */
    public function setAcquirer($_acquirer)
    {
        if(!DOBEnumAcquirerType::valueIsValid($_acquirer))
        {
            return false;
        }
        return ($this->acquirer = $_acquirer);
    }
    /**
     * Get expmonth value
     * @return int
     */
    public function getExpmonth()
    {
        return $this->expmonth;
    }
    /**
     * Set expmonth value
     * @param int $_expmonth the expmonth
     * @return int
     */
    public function setExpmonth($_expmonth)
    {
        return ($this->expmonth = $_expmonth);
    }
    /**
     * Get expyear value
     * @return int
     */
    public function getExpyear()
    {
        return $this->expyear;
    }
    /**
     * Set expyear value
     * @param int $_expyear the expyear
     * @return int
     */
    public function setExpyear($_expyear)
    {
        return ($this->expyear = $_expyear);
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
     * Get orderid value
     * @return string|null
     */
    public function getOrderid()
    {
        return $this->orderid;
    }
    /**
     * Set orderid value
     * @param string $_orderid the orderid
     * @return string
     */
    public function setOrderid($_orderid)
    {
        return ($this->orderid = $_orderid);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $_description the description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->description = $_description);
    }
    /**
     * Get history value
     * @return DOBStructArrayOfTransactionHistoryInfo|null
     */
    public function getHistory()
    {
        return $this->history;
    }
    /**
     * Set history value
     * @param DOBStructArrayOfTransactionHistoryInfo $_history the history
     * @return DOBStructArrayOfTransactionHistoryInfo
     */
    public function setHistory($_history)
    {
        return ($this->history = $_history);
    }
    /**
     * Get cardholder value
     * @return string|null
     */
    public function getCardholder()
    {
        return $this->cardholder;
    }
    /**
     * Set cardholder value
     * @param string $_cardholder the cardholder
     * @return string
     */
    public function setCardholder($_cardholder)
    {
        return ($this->cardholder = $_cardholder);
    }
    /**
     * Get FraudMessage value
     * @return string|null
     */
    public function getFraudMessage()
    {
        return $this->FraudMessage;
    }
    /**
     * Set FraudMessage value
     * @param string $_fraudMessage the FraudMessage
     * @return string
     */
    public function setFraudMessage($_fraudMessage)
    {
        return ($this->FraudMessage = $_fraudMessage);
    }
    /**
     * Get payerCountryCode value
     * @return string|null
     */
    public function getPayerCountryCode()
    {
        return $this->payerCountryCode;
    }
    /**
     * Set payerCountryCode value
     * @param string $_payerCountryCode the payerCountryCode
     * @return string
     */
    public function setPayerCountryCode($_payerCountryCode)
    {
        return ($this->payerCountryCode = $_payerCountryCode);
    }
    /**
     * Get issuedCountryCode value
     * @return string|null
     */
    public function getIssuedCountryCode()
    {
        return $this->issuedCountryCode;
    }
    /**
     * Set issuedCountryCode value
     * @param string $_issuedCountryCode the issuedCountryCode
     * @return string
     */
    public function setIssuedCountryCode($_issuedCountryCode)
    {
        return ($this->issuedCountryCode = $_issuedCountryCode);
    }
    /**
     * Get tcardno value
     * @return string|null
     */
    public function getTcardno()
    {
        return $this->tcardno;
    }
    /**
     * Set tcardno value
     * @param string $_tcardno the tcardno
     * @return string
     */
    public function setTcardno($_tcardno)
    {
        return ($this->tcardno = $_tcardno);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructTransactionInformationType
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
