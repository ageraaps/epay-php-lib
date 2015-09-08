<?php
/**
 * File for class DOBStructCaptureResponse
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * This class stands for DOBStructCaptureResponse originally named captureResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL}
 * @package DOB
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBStructCaptureResponse extends DOBWsdlClass
{
    /**
     * The captureResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var boolean
     */
    public $captureResult;
    /**
     * The pbsResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $pbsResponse;
    /**
     * The epayresponse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 1
     * @var int
     */
    public $epayresponse;
    /**
     * Constructor method for captureResponse
     * @see parent::__construct()
     * @param boolean $_captureResult
     * @param int $_pbsResponse
     * @param int $_epayresponse
     * @return DOBStructCaptureResponse
     */
    public function __construct($_captureResult,$_pbsResponse,$_epayresponse)
    {
        parent::__construct(array('captureResult'=>$_captureResult,'pbsResponse'=>$_pbsResponse,'epayresponse'=>$_epayresponse),false);
    }
    /**
     * Get captureResult value
     * @return boolean
     */
    public function getCaptureResult()
    {
        return $this->captureResult;
    }
    /**
     * Set captureResult value
     * @param boolean $_captureResult the captureResult
     * @return boolean
     */
    public function setCaptureResult($_captureResult)
    {
        return ($this->captureResult = $_captureResult);
    }
    /**
     * Get pbsResponse value
     * @return int
     */
    public function getPbsResponse()
    {
        return $this->pbsResponse;
    }
    /**
     * Set pbsResponse value
     * @param int $_pbsResponse the pbsResponse
     * @return int
     */
    public function setPbsResponse($_pbsResponse)
    {
        return ($this->pbsResponse = $_pbsResponse);
    }
    /**
     * Get epayresponse value
     * @return int
     */
    public function getEpayresponse()
    {
        return $this->epayresponse;
    }
    /**
     * Set epayresponse value
     * @param int $_epayresponse the epayresponse
     * @return int
     */
    public function setEpayresponse($_epayresponse)
    {
        return ($this->epayresponse = $_epayresponse);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DOBWsdlClass::__set_state()
     * @uses DOBWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DOBStructCaptureResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
