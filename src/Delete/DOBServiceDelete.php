<?php
/**
 * File for class DOBServiceDelete
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceDelete originally named Delete
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceDelete extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named delete
     * Documentation : To delete a payment. If the returning value is false check for error codes in the epayresponse reference attribute for information about errors from ePay or PBS.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructDelete $_dOBStructDelete
     * @return DOBStructDeleteResponse
     */
    public function delete(DOBStructDelete $_dOBStructDelete)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->delete($_dOBStructDelete));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructDeleteResponse
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
