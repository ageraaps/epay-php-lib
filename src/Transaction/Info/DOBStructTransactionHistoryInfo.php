<?php
/**
 * File for class DOBStructTransactionHistoryInfo
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructTransactionHistoryInfo originally named TransactionHistoryInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructTransactionHistoryInfo extends DOBWsdlClass
{
    /**
     * The transactionHistoryID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var long
     */
    public $transactionHistoryID;
    /**
     * The logonID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $logonID;
    /**
     * The created
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $created;
    /**
     * The username
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $username;
    /**
     * The eventMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $eventMsg;
    /**
     * Constructor method for TransactionHistoryInfo
     * @see parent::__construct()
     * @param long $_transactionHistoryID
     * @param int $_logonID
     * @param dateTime $_created
     * @param string $_username
     * @param string $_eventMsg
     * @return DOBStructTransactionHistoryInfo
     */
    public function __construct($_transactionHistoryID,$_logonID,$_created,$_username = NULL,$_eventMsg = NULL)
    {
        parent::__construct(array('transactionHistoryID'=>$_transactionHistoryID,'logonID'=>$_logonID,'created'=>$_created,'username'=>$_username,'eventMsg'=>$_eventMsg),false);
    }
    /**
     * Get transactionHistoryID value
     * @return long
     */
    public function getTransactionHistoryID()
    {
        return $this->transactionHistoryID;
    }
    /**
     * Set transactionHistoryID value
     * @param long $_transactionHistoryID the transactionHistoryID
     * @return long
     */
    public function setTransactionHistoryID($_transactionHistoryID)
    {
        return ($this->transactionHistoryID = $_transactionHistoryID);
    }
    /**
     * Get logonID value
     * @return int
     */
    public function getLogonID()
    {
        return $this->logonID;
    }
    /**
     * Set logonID value
     * @param int $_logonID the logonID
     * @return int
     */
    public function setLogonID($_logonID)
    {
        return ($this->logonID = $_logonID);
    }
    /**
     * Get created value
     * @return dateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param dateTime $_created the created
     * @return dateTime
     */
    public function setCreated($_created)
    {
        return ($this->created = $_created);
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $_username the username
     * @return string
     */
    public function setUsername($_username)
    {
        return ($this->username = $_username);
    }
    /**
     * Get eventMsg value
     * @return string|null
     */
    public function getEventMsg()
    {
        return $this->eventMsg;
    }
    /**
     * Set eventMsg value
     * @param string $_eventMsg the eventMsg
     * @return string
     */
    public function setEventMsg($_eventMsg)
    {
        return ($this->eventMsg = $_eventMsg);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructTransactionHistoryInfo
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
