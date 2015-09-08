<?php
/**
 * File for class DOBServiceGettransaction
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceGettransaction originally named Gettransaction
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceGettransaction extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named gettransaction
     * Documentation : Returns information about a transaction by its transactionid. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructGettransaction $_dOBStructGettransaction
     * @return DOBStructGettransactionResponse
     */
    public function gettransaction(DOBStructGettransaction $_dOBStructGettransaction)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->gettransaction($_dOBStructGettransaction));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructGettransactionResponse
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
