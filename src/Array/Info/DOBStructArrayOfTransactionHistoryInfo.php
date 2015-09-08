<?php
/**
 * File for class DOBStructArrayOfTransactionHistoryInfo
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructArrayOfTransactionHistoryInfo originally named ArrayOfTransactionHistoryInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructArrayOfTransactionHistoryInfo extends DOBWsdlClass
{
    /**
     * The TransactionHistoryInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var DOBStructTransactionHistoryInfo
     */
    public $TransactionHistoryInfo;
    /**
     * Constructor method for ArrayOfTransactionHistoryInfo
     * @see parent::__construct()
     * @param DOBStructTransactionHistoryInfo $_transactionHistoryInfo
     * @return DOBStructArrayOfTransactionHistoryInfo
     */
    public function __construct($_transactionHistoryInfo = NULL)
    {
        parent::__construct(array('TransactionHistoryInfo'=>$_transactionHistoryInfo),false);
    }
    /**
     * Get TransactionHistoryInfo value
     * @return DOBStructTransactionHistoryInfo|null
     */
    public function getTransactionHistoryInfo()
    {
        return $this->TransactionHistoryInfo;
    }
    /**
     * Set TransactionHistoryInfo value
     * @param DOBStructTransactionHistoryInfo $_transactionHistoryInfo the TransactionHistoryInfo
     * @return DOBStructTransactionHistoryInfo
     */
    public function setTransactionHistoryInfo($_transactionHistoryInfo)
    {
        return ($this->TransactionHistoryInfo = $_transactionHistoryInfo);
    }
    /**
     * Returns the current element
     * @see DOBWsdlClass::current()
     * @return DOBStructTransactionHistoryInfo
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see DOBWsdlClass::item()
     * @param int $_index
     * @return DOBStructTransactionHistoryInfo
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see DOBWsdlClass::first()
     * @return DOBStructTransactionHistoryInfo
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see DOBWsdlClass::last()
     * @return DOBStructTransactionHistoryInfo
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see DOBWsdlClass::last()
     * @param int $_offset
     * @return DOBStructTransactionHistoryInfo
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see DOBWsdlClass::getAttributeName()
     * @return string TransactionHistoryInfo
     */
    public function getAttributeName()
    {
        return 'TransactionHistoryInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructArrayOfTransactionHistoryInfo
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
