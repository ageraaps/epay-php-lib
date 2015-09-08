<?php
/**
 * File for class DOBStructArrayOfTransactionInformationType
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructArrayOfTransactionInformationType originally named ArrayOfTransactionInformationType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructArrayOfTransactionInformationType extends DOBWsdlClass
{
    /**
     * The TransactionInformationType
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var DOBStructTransactionInformationType
     */
    public $TransactionInformationType;
    /**
     * Constructor method for ArrayOfTransactionInformationType
     * @see parent::__construct()
     * @param DOBStructTransactionInformationType $_transactionInformationType
     * @return DOBStructArrayOfTransactionInformationType
     */
    public function __construct($_transactionInformationType = NULL)
    {
        parent::__construct(array('TransactionInformationType'=>$_transactionInformationType),false);
    }
    /**
     * Get TransactionInformationType value
     * @return DOBStructTransactionInformationType|null
     */
    public function getTransactionInformationType()
    {
        return $this->TransactionInformationType;
    }
    /**
     * Set TransactionInformationType value
     * @param DOBStructTransactionInformationType $_transactionInformationType the TransactionInformationType
     * @return DOBStructTransactionInformationType
     */
    public function setTransactionInformationType($_transactionInformationType)
    {
        return ($this->TransactionInformationType = $_transactionInformationType);
    }
    /**
     * Returns the current element
     * @see DOBWsdlClass::current()
     * @return DOBStructTransactionInformationType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see DOBWsdlClass::item()
     * @param int $_index
     * @return DOBStructTransactionInformationType
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see DOBWsdlClass::first()
     * @return DOBStructTransactionInformationType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see DOBWsdlClass::last()
     * @return DOBStructTransactionInformationType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see DOBWsdlClass::last()
     * @param int $_offset
     * @return DOBStructTransactionInformationType
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see DOBWsdlClass::getAttributeName()
     * @return string TransactionInformationType
     */
    public function getAttributeName()
    {
        return 'TransactionInformationType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructArrayOfTransactionInformationType
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
