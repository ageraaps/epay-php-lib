<?php
/**
 * File for class DOBServiceCapture
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceCapture originally named Capture
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceCapture extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named capture
     * Documentation : To capture a payment. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructCapture $_dOBStructCapture
     * @return DOBStructCaptureResponse
     */
    public function capture(DOBStructCapture $_dOBStructCapture)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->capture($_dOBStructCapture));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructCaptureResponse
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
