<?php
/**
 * File for class DOBEnumTransactionStatus
 * @package DOB
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBEnumTransactionStatus originally named TransactionStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBEnumTransactionStatus extends DOBWsdlClass
{
    /**
     * Constant for value 'PAYMENT_UNDEFINED'
     * @return string 'PAYMENT_UNDEFINED'
     */
    const VALUE_PAYMENT_UNDEFINED = 'PAYMENT_UNDEFINED';
    /**
     * Constant for value 'PAYMENT_NEW'
     * @return string 'PAYMENT_NEW'
     */
    const VALUE_PAYMENT_NEW = 'PAYMENT_NEW';
    /**
     * Constant for value 'PAYMENT_CAPTURED'
     * @return string 'PAYMENT_CAPTURED'
     */
    const VALUE_PAYMENT_CAPTURED = 'PAYMENT_CAPTURED';
    /**
     * Constant for value 'PAYMENT_DELETED'
     * @return string 'PAYMENT_DELETED'
     */
    const VALUE_PAYMENT_DELETED = 'PAYMENT_DELETED';
    /**
     * Constant for value 'PAYMENT_INSTANT_CAPTURE_FAILED'
     * @return string 'PAYMENT_INSTANT_CAPTURE_FAILED'
     */
    const VALUE_PAYMENT_INSTANT_CAPTURE_FAILED = 'PAYMENT_INSTANT_CAPTURE_FAILED';
    /**
     * Constant for value 'PAYMENT_SUBSCRIPTION_INI'
     * @return string 'PAYMENT_SUBSCRIPTION_INI'
     */
    const VALUE_PAYMENT_SUBSCRIPTION_INI = 'PAYMENT_SUBSCRIPTION_INI';
    /**
     * Constant for value 'PAYMENT_RENEW'
     * @return string 'PAYMENT_RENEW'
     */
    const VALUE_PAYMENT_RENEW = 'PAYMENT_RENEW';
    /**
     * Constant for value 'PAYMENT_EUROLINE_WAIT_CAPTURE'
     * @return string 'PAYMENT_EUROLINE_WAIT_CAPTURE'
     */
    const VALUE_PAYMENT_EUROLINE_WAIT_CAPTURE = 'PAYMENT_EUROLINE_WAIT_CAPTURE';
    /**
     * Constant for value 'PAYMENT_EUROLINE_WAIT_CREDIT'
     * @return string 'PAYMENT_EUROLINE_WAIT_CREDIT'
     */
    const VALUE_PAYMENT_EUROLINE_WAIT_CREDIT = 'PAYMENT_EUROLINE_WAIT_CREDIT';
    /**
     * Constant for value 'PARTLY_TRANSACTION_HIDDEN'
     * @return string 'PARTLY_TRANSACTION_HIDDEN'
     */
    const VALUE_PARTLY_TRANSACTION_HIDDEN = 'PARTLY_TRANSACTION_HIDDEN';
    /**
     * Return true if value is allowed
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_UNDEFINED
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_NEW
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_CAPTURED
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_DELETED
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_INSTANT_CAPTURE_FAILED
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_SUBSCRIPTION_INI
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_RENEW
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_EUROLINE_WAIT_CAPTURE
     * @uses DOBEnumTransactionStatus::VALUE_PAYMENT_EUROLINE_WAIT_CREDIT
     * @uses DOBEnumTransactionStatus::VALUE_PARTLY_TRANSACTION_HIDDEN
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(DOBEnumTransactionStatus::VALUE_PAYMENT_UNDEFINED,DOBEnumTransactionStatus::VALUE_PAYMENT_NEW,DOBEnumTransactionStatus::VALUE_PAYMENT_CAPTURED,DOBEnumTransactionStatus::VALUE_PAYMENT_DELETED,DOBEnumTransactionStatus::VALUE_PAYMENT_INSTANT_CAPTURE_FAILED,DOBEnumTransactionStatus::VALUE_PAYMENT_SUBSCRIPTION_INI,DOBEnumTransactionStatus::VALUE_PAYMENT_RENEW,DOBEnumTransactionStatus::VALUE_PAYMENT_EUROLINE_WAIT_CAPTURE,DOBEnumTransactionStatus::VALUE_PAYMENT_EUROLINE_WAIT_CREDIT,DOBEnumTransactionStatus::VALUE_PARTLY_TRANSACTION_HIDDEN));
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
