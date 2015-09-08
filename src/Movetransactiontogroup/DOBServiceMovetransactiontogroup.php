<?php
/**
 * File for class DOBServiceMovetransactiontogroup
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBServiceMovetransactiontogroup originally named Movetransactiontogroup
 * @package DOB
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBServiceMovetransactiontogroup extends DOBWsdlClass
{
    /**
     * Method to call the operation originally named movetransactiontogroup
     * Documentation : Use this function to move a transaction to a specific group. If the function returns true then the transaction was successfully moved to the group. If the function returns false then look at the parameter 'epayresponse' in order to determine why the transaction could not be moved to the Group.
     * @uses DOBWsdlClass::getSoapClient()
     * @uses DOBWsdlClass::setResult()
     * @uses DOBWsdlClass::saveLastError()
     * @param DOBStructMovetransactiontogroup $_dOBStructMovetransactiontogroup
     * @return DOBStructMovetransactiontogroupResponse
     */
    public function movetransactiontogroup(DOBStructMovetransactiontogroup $_dOBStructMovetransactiontogroup)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->movetransactiontogroup($_dOBStructMovetransactiontogroup));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see DOBWsdlClass::getResult()
     * @return DOBStructMovetransactiontogroupResponse
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
