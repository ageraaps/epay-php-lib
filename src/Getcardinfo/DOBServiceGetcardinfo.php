<?php
/**
 * File for class DOBServiceGetcardinfo
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceGetcardinfo originally named Getcardinfo
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceGetcardinfo extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named getcardinfo
     * Documentation : Returns a list of TransactionInformationType objects with information of transactions. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructGetcardinfo $_dOBStructGetcardinfo
     * @return DOBStructGetcardinfoResponse
     */
    public function getcardinfo(DOBStructGetcardinfo $_dOBStructGetcardinfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getcardinfo($_dOBStructGetcardinfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructGetcardinfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
