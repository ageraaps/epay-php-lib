<?php
/**
 * File for the class which returns the class map definition
 * @package DOB
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
/**
 * Class which returns the class map definition by the static method DOBClassMap::classMap()
 * @package DOB
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-08
 */
class DOBClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'AcquirerType' => 'DOBEnumAcquirerType',
  'ArrayOfTransactionHistoryInfo' => 'DOBStructArrayOfTransactionHistoryInfo',
  'ArrayOfTransactionInformationType' => 'DOBStructArrayOfTransactionInformationType',
  'CardType' => 'DOBEnumCardType',
  'PayMode' => 'DOBEnumPayMode',
  'TransactionHistoryInfo' => 'DOBStructTransactionHistoryInfo',
  'TransactionInformationType' => 'DOBStructTransactionInformationType',
  'TransactionStatus' => 'DOBEnumTransactionStatus',
  'capture' => 'DOBStructCapture',
  'captureResponse' => 'DOBStructCaptureResponse',
  'credit' => 'DOBStructCredit',
  'creditResponse' => 'DOBStructCreditResponse',
  'delete' => 'DOBStructDelete',
  'deleteResponse' => 'DOBStructDeleteResponse',
  'getEpayError' => 'DOBStructGetEpayError',
  'getEpayErrorResponse' => 'DOBStructGetEpayErrorResponse',
  'getPbsError' => 'DOBStructGetPbsError',
  'getPbsErrorResponse' => 'DOBStructGetPbsErrorResponse',
  'getcardinfo' => 'DOBStructGetcardinfo',
  'getcardinfoResponse' => 'DOBStructGetcardinfoResponse',
  'getcardtype' => 'DOBStructGetcardtype',
  'getcardtypeResponse' => 'DOBStructGetcardtypeResponse',
  'gettransaction' => 'DOBStructGettransaction',
  'gettransactionResponse' => 'DOBStructGettransactionResponse',
  'gettransactionlist' => 'DOBStructGettransactionlist',
  'gettransactionlistResponse' => 'DOBStructGettransactionlistResponse',
  'move_as_captured' => 'DOBStructMove_as_captured',
  'move_as_capturedResponse' => 'DOBStructMove_as_capturedResponse',
  'movetransactiontogroup' => 'DOBStructMovetransactiontogroup',
  'movetransactiontogroupResponse' => 'DOBStructMovetransactiontogroupResponse',
  'renew' => 'DOBStructRenew',
  'renewResponse' => 'DOBStructRenewResponse',
);
    }
}
