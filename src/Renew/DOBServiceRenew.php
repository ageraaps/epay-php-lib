<?php
/**
 * File for class DOBServiceRenew
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceRenew originally named Renew
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceRenew extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named renew
     * Documentation : To renew an EWIRE payment. If the returning value is false check for error codes in the pbsresponse (EWIRE result) and epayresponse reference attributes for information about errors from ePay or EWIRE.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructRenew $_dOBStructRenew
     * @return DOBStructRenewResponse
     */
    public function renew(DOBStructRenew $_dOBStructRenew)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->renew($_dOBStructRenew));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructRenewResponse
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
