<?php
/**
 * File for class DOBServiceGet
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceGet originally named Get
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceGet extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named getPbsError
     * Documentation : Converts an error from PBS to a string description. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructGetPbsError $_dOBStructGetPbsError
     * @return DOBStructGetPbsErrorResponse
     */
    public function getPbsError(DOBStructGetPbsError $_dOBStructGetPbsError)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPbsError($_dOBStructGetPbsError));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getEpayError
     * Documentation : Converts an errorcode from ePay to a string. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructGetEpayError $_dOBStructGetEpayError
     * @return DOBStructGetEpayErrorResponse
     */
    public function getEpayError(DOBStructGetEpayError $_dOBStructGetEpayError)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getEpayError($_dOBStructGetEpayError));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructGetEpayErrorResponse|DOBStructGetPbsErrorResponse
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
