<?php
/**
 * Test with DOB for 'https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL'
 * @package DOB
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/src/DOBAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a DOBWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[DOBWsdlClass::WSDL_URL] = 'https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL';
 * $wsdl[DOBWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[DOBWsdlClass::WSDL_TRACE] = true;
 * $wsdl[DOBWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[DOBWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new DOBWsdlClass($wsdl);
 */
/**
 * Examples
 */


/***************************
 * Example for DOBServiceGet
 */
$dOBServiceGet = new DOBServiceGet();
// sample call for DOBServiceGet::getPbsError()
if($dOBServiceGet->getPbsError(new DOBStructGetPbsError(/*** update parameters list ***/)))
    print_r($dOBServiceGet->getResult());
else
    print_r($dOBServiceGet->getLastError());
// sample call for DOBServiceGet::getEpayError()
if($dOBServiceGet->getEpayError(new DOBStructGetEpayError(/*** update parameters list ***/)))
    print_r($dOBServiceGet->getResult());
else
    print_r($dOBServiceGet->getLastError());

/*******************************
 * Example for DOBServiceCapture
 */
$dOBServiceCapture = new DOBServiceCapture();
// sample call for DOBServiceCapture::capture()
if($dOBServiceCapture->capture(new DOBStructCapture(/*** update parameters list ***/)))
    print_r($dOBServiceCapture->getResult());
else
    print_r($dOBServiceCapture->getLastError());

/****************************************
 * Example for DOBServiceMove_as_captured
 */
$dOBServiceMove_as_captured = new DOBServiceMove_as_captured();
// sample call for DOBServiceMove_as_captured::move_as_captured()
if($dOBServiceMove_as_captured->move_as_captured(new DOBStructMove_as_captured(/*** update parameters list ***/)))
    print_r($dOBServiceMove_as_captured->getResult());
else
    print_r($dOBServiceMove_as_captured->getLastError());

/******************************
 * Example for DOBServiceDelete
 */
$dOBServiceDelete = new DOBServiceDelete();
// sample call for DOBServiceDelete::delete()
if($dOBServiceDelete->delete(new DOBStructDelete(/*** update parameters list ***/)))
    print_r($dOBServiceDelete->getResult());
else
    print_r($dOBServiceDelete->getLastError());

/******************************
 * Example for DOBServiceCredit
 */
$dOBServiceCredit = new DOBServiceCredit();
// sample call for DOBServiceCredit::credit()
if($dOBServiceCredit->credit(new DOBStructCredit(/*** update parameters list ***/)))
    print_r($dOBServiceCredit->getResult());
else
    print_r($dOBServiceCredit->getLastError());

/***********************************
 * Example for DOBServiceGetcardtype
 */
$dOBServiceGetcardtype = new DOBServiceGetcardtype();
// sample call for DOBServiceGetcardtype::getcardtype()
if($dOBServiceGetcardtype->getcardtype(new DOBStructGetcardtype(/*** update parameters list ***/)))
    print_r($dOBServiceGetcardtype->getResult());
else
    print_r($dOBServiceGetcardtype->getLastError());

/**************************************
 * Example for DOBServiceGettransaction
 */
$dOBServiceGettransaction = new DOBServiceGettransaction();
// sample call for DOBServiceGettransaction::gettransaction()
if($dOBServiceGettransaction->gettransaction(new DOBStructGettransaction(/*** update parameters list ***/)))
    print_r($dOBServiceGettransaction->getResult());
else
    print_r($dOBServiceGettransaction->getLastError());

/******************************************
 * Example for DOBServiceGettransactionlist
 */
$dOBServiceGettransactionlist = new DOBServiceGettransactionlist();
// sample call for DOBServiceGettransactionlist::gettransactionlist()
if($dOBServiceGettransactionlist->gettransactionlist(new DOBStructGettransactionlist(/*** update parameters list ***/)))
    print_r($dOBServiceGettransactionlist->getResult());
else
    print_r($dOBServiceGettransactionlist->getLastError());

/***********************************
 * Example for DOBServiceGetcardinfo
 */
$dOBServiceGetcardinfo = new DOBServiceGetcardinfo();
// sample call for DOBServiceGetcardinfo::getcardinfo()
if($dOBServiceGetcardinfo->getcardinfo(new DOBStructGetcardinfo(/*** update parameters list ***/)))
    print_r($dOBServiceGetcardinfo->getResult());
else
    print_r($dOBServiceGetcardinfo->getLastError());

/*****************************
 * Example for DOBServiceRenew
 */
$dOBServiceRenew = new DOBServiceRenew();
// sample call for DOBServiceRenew::renew()
if($dOBServiceRenew->renew(new DOBStructRenew(/*** update parameters list ***/)))
    print_r($dOBServiceRenew->getResult());
else
    print_r($dOBServiceRenew->getLastError());

/**********************************************
 * Example for DOBServiceMovetransactiontogroup
 */
$dOBServiceMovetransactiontogroup = new DOBServiceMovetransactiontogroup();
// sample call for DOBServiceMovetransactiontogroup::movetransactiontogroup()
if($dOBServiceMovetransactiontogroup->movetransactiontogroup(new DOBStructMovetransactiontogroup(/*** update parameters list ***/)))
    print_r($dOBServiceMovetransactiontogroup->getResult());
else
    print_r($dOBServiceMovetransactiontogroup->getLastError());
