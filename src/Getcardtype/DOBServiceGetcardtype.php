<?php
/**
 * File for class DOBServiceGetcardtype
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceGetcardtype originally named Getcardtype
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceGetcardtype extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named getcardtype
     * Documentation : To calculate a card type. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay. The cardtype returned are defined when logged on to the www.epay.dk website.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructGetcardtype $_dOBStructGetcardtype
     * @return DOBStructGetcardtypeResponse
     */
    public function getcardtype(DOBStructGetcardtype $_dOBStructGetcardtype)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getcardtype($_dOBStructGetcardtype));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructGetcardtypeResponse
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
