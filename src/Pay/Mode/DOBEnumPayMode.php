<?php
/**
 * File for class DOBEnumPayMode
 * @package DOB
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBEnumPayMode originally named PayMode
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBEnumPayMode extends DOBWsdlClass
{
    /**
     * Constant for value 'MODE_PRODUCTION'
     * @return string 'MODE_PRODUCTION'
     */
    const VALUE_MODE_PRODUCTION = 'MODE_PRODUCTION';
    /**
     * Constant for value 'MODE_TEST'
     * @return string 'MODE_TEST'
     */
    const VALUE_MODE_TEST = 'MODE_TEST';
    /**
     * Constant for value 'MODE_EPAY'
     * @return string 'MODE_EPAY'
     */
    const VALUE_MODE_EPAY = 'MODE_EPAY';
    /**
     * Return true if value is allowed
     * @uses DOBEnumPayMode::VALUE_MODE_PRODUCTION
     * @uses DOBEnumPayMode::VALUE_MODE_TEST
     * @uses DOBEnumPayMode::VALUE_MODE_EPAY
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(DOBEnumPayMode::VALUE_MODE_PRODUCTION,DOBEnumPayMode::VALUE_MODE_TEST,DOBEnumPayMode::VALUE_MODE_EPAY));
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
