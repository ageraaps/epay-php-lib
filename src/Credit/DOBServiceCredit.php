<?php
/**
 * File for class DOBServiceCredit
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceCredit originally named Credit
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceCredit extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named credit
     * Documentation : To credit a payment. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructCredit $_dOBStructCredit
     * @return DOBStructCreditResponse
     */
    public function credit(DOBStructCredit $_dOBStructCredit)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->credit($_dOBStructCredit));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructCreditResponse
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
