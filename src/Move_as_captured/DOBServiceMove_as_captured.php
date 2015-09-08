<?php
/**
 * File for class DOBServiceMove_as_captured
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceMove_as_captured originally named Move_as_captured
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceMove_as_captured extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named move_as_captured
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructMove_as_captured $_dOBStructMove_as_captured
     * @return DOBStructMove_as_capturedResponse
     */
    public function move_as_captured(DOBStructMove_as_captured $_dOBStructMove_as_captured)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->move_as_captured($_dOBStructMove_as_captured));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructMove_as_capturedResponse
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
