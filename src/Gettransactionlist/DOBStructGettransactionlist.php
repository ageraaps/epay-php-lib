<?php
/**
 * File for class DOBStructGettransactionlist
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructGettransactionlist originally named gettransactionlist
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructGettransactionlist extends DOBWsdlClass
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
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var DOBEnumTransactionStatus
     */
    public $status;
    /**
     * The searchdatestart
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $searchdatestart;
    /**
     * The searchdateend
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var dateTime
     */
    public $searchdateend;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * The searchorderid
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $searchorderid;
    /**
     * The searchgroup
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $searchgroup;
    /**
     * The pwd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $pwd;
    /**
     * The transactionInformationAry
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var DOBStructArrayOfTransactionInformationType
     */
    public $transactionInformationAry;
    /**
     * Constructor method for gettransactionlist
     * @see parent::__construct()
     * @param int $_merchantnumber
     * @param DOBEnumTransactionStatus $_status
     * @param dateTime $_searchdatestart
     * @param dateTime $_searchdateend
     * @param int $_epayresponse
     * @param string $_searchorderid
     * @param string $_searchgroup
     * @param string $_pwd
     * @param DOBStructArrayOfTransactionInformationType $_transactionInformationAry
     * @return DOBStructGettransactionlist
     */
    public function __construct($_merchantnumber,$_status,$_searchdatestart,$_searchdateend,$_epayresponse,$_searchorderid = NULL,$_searchgroup = NULL,$_pwd = NULL,$_transactionInformationAry = NULL)
    {
        parent::__construct(array('merchantnumber'=>$_merchantnumber,'status'=>$_status,'searchdatestart'=>$_searchdatestart,'searchdateend'=>$_searchdateend,'epayresponse'=>$_epayresponse,'searchorderid'=>$_searchorderid,'searchgroup'=>$_searchgroup,'pwd'=>$_pwd,'transactionInformationAry'=>($_transactionInformationAry instanceof DOBStructArrayOfTransactionInformationType)?$_transactionInformationAry:new DOBStructArrayOfTransactionInformationType($_transactionInformationAry)),false);
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
     * Get searchdatestart value
     * @return dateTime
     */
    public function getSearchdatestart()
    {
        return $this->searchdatestart;
    }
    /**
     * Set searchdatestart value
     * @param dateTime $_searchdatestart the searchdatestart
     * @return dateTime
     */
    public function setSearchdatestart($_searchdatestart)
    {
        return ($this->searchdatestart = $_searchdatestart);
    }
    /**
     * Get searchdateend value
     * @return dateTime
     */
    public function getSearchdateend()
    {
        return $this->searchdateend;
    }
    /**
     * Set searchdateend value
     * @param dateTime $_searchdateend the searchdateend
     * @return dateTime
     */
    public function setSearchdateend($_searchdateend)
    {
        return ($this->searchdateend = $_searchdateend);
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
     * Get searchorderid value
     * @return string|null
     */
    public function getSearchorderid()
    {
        return $this->searchorderid;
    }
    /**
     * Set searchorderid value
     * @param string $_searchorderid the searchorderid
     * @return string
     */
    public function setSearchorderid($_searchorderid)
    {
        return ($this->searchorderid = $_searchorderid);
    }
    /**
     * Get searchgroup value
     * @return string|null
     */
    public function getSearchgroup()
    {
        return $this->searchgroup;
    }
    /**
     * Set searchgroup value
     * @param string $_searchgroup the searchgroup
     * @return string
     */
    public function setSearchgroup($_searchgroup)
    {
        return ($this->searchgroup = $_searchgroup);
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
     * @return DOBStructGettransactionlist
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
