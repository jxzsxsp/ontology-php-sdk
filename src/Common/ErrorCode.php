<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/21
 * Time: 下午7:31
 */

namespace Ontology\Common;


class ErrorCode
{

    public static function getError($code = 0, $msg = '')
    {
        $map = array();
        $map["Error"] = $code;
        $map["Desc"] = $msg;

        return json_encode($map);
    }

    //account error
    public static function InvalidParams()
    {
        return self::getError(51001, "Account Error,invalid params");
    }

    public static function UnsupportedKeyType()
    {
        return self::getError(51002, "Account Error,unsupported key type");
    }

    public static function InvalidMessage()
    {
        return self::getError(51003, "Account Error,invalid message");
    }

    public static function WithoutPrivate()
    {
        return self::getError(51004, "Account Error,account without private key cannot generate signature");
    }

    public static function InvalidSM2Signature()
    {
        return self::getError(51005, "Account Error,invalid SM2 signature parameter, ID (function) excepted");
    }

    public static function AccountInvalidInput()
    {
        return self::getError(51006, "Account Error,account invalid input");
    }

    public static function AccountWithoutPublicKey()
    {
        return self::getError(51007, "Account Error,account without public key cannot verify signature");
    }

    public static function UnknownKeyType()
    {
        return self::getError(51008, "Account Error,unknown key type");
    }

    public static function NullInput()
    {
        return self::getError(51009, "Account Error,null input");
    }

    public static function InvalidData()
    {
        return self::getError(51010, "Account Error,invalid data");
    }

    public static function Decoded3bytesError()
    {
        return self::getError(51011, "Account Error,decoded 3 bytes error");
    }

    public static function DecodePrikeyPassphraseError()
    {
        return self::getError(51012, "Account Error,decode prikey passphrase error.");
    }

    public static function PrikeyLengthError()
    {
        return self::getError(51013, "Account Error,Prikey length error");
    }

    public static function EncryptedPriKeyError()
    {
        return self::getError(51014, "Account Error,Prikey length error");
    }

    public static function encryptedPriKeyAddressPasswordErr()
    {
        return self::getError(51015, "Account Error,encryptedPriKey address password not match.");
    }

    public static function EncriptPrivateKeyError()
    {
        return self::getError(51016, "Account Error, encript privatekey error,");
    }


    //
    public static function ParamLengthErr()
    {
        return self::getError(52001, "Uint256 Error,param length error");
    }

    public static function ChecksumNotValidate()
    {
        return self::getError(52002, "Base58 Error,Checksum does not validate");
    }

    public static function InputTooShort()
    {
        return self::getError(52003, "Base58 Error,Input too short");
    }

    public static function UnknownCurve()
    {
        return self::getError(52004, "Curve Error,unknown curve");
    }

    public static function UnknownCurveLabel()
    {
        return self::getError(52005, "Curve Error,unknown curve label");
    }

    public static function UnknownAsymmetricKeyType()
    {
        return self::getError(52006, "keyType Error,unknown asymmetric key type");
    }

    public static function InvalidSignatureData()
    {
        return self::getError(52007, "Signature Error,invalid signature data: missing the ID parameter for SM3withSM2");
    }

    public static function InvalidSignatureDataLen()
    {
        return self::getError(52008, "Signature Error,invalid signature data length");
    }

    public static function MalformedSignature()
    {
        return self::getError(52009, "Signature Error,malformed signature");
    }

    public static function UnsupportedSignatureScheme()
    {
        return self::getError(52010, "Signature Error,unsupported signature scheme:");
    }

    public static function DataSignatureErr()
    {
        return self::getError(52011, "Signature Error,Data signature error.");
    }

    public static function UnSupportOperation()
    {
        return self::getError(52012, "Address Error, UnsupportedOperationException");
    }


    //Core Error
    public static function TxDeserializeError()
    {
        return self::getError(53001, "Core Error,Transaction deserialize failed");
    }

    public static function BlockDeserializeError()
    {
        return self::getError(53002, "Core Error,Block deserialize failed");
    }


    //merkle error
    public static function MerkleVerifierErr()
    {
        return self::getError(54001, "Wrong params: the tree size is smaller than the leaf index");
    }

    public static function TargetHashesErr()
    {
        return self::getError(54002, "targetHashes error");
    }

    public static function ConstructedRootHashErr($msg)
    {
        return self::getError(54003, "Other Error," . $msg);
    }

    public static function AsserFailedHashFullTree()
    {
        return self::getError(54004, "assert failed in hash full tree");
    }

    public static function LeftTreeFull()
    {
        return self::getError(54005, "left tree always full");
    }


    //SmartCodeTx Error
    public static function SendRawTxError()
    {
        return self::getError(58001, "SmartCodeTx Error,sendRawTransaction error");
    }

    public static function TypeError()
    {
        return self::getError(58002, "SmartCodeTx Error,type error");
    }


    //OntIdTx Error
    public static function NullCodeHash()
    {
        return self::getError(58003, "OntIdTx Error,null codeHash");
    }

    public static function ParamError()
    {
        return self::getError(58004, "param error,");
    }

    public static function ParamErr($msg)
    {
        return self::getError(58005, $msg);
    }

    public static function DidNull()
    {
        return self::getError(58006, "OntIdTx Error,SendDid or receiverDid is null in metaData");
    }

    public static function NotExistCliamIssuer()
    {
        return self::getError(58007, "OntIdTx Error,Not exist cliam issuer");
    }

    public static function NotFoundPublicKeyId()
    {
        return self::getError(58008, "OntIdTx Error,not found PublicKeyId");
    }

    public static function PublicKeyIdErr()
    {
        return self::getError(58009, "OntIdTx Error,PublicKeyId err");
    }

    public static function BlockHeightNotMatch()
    {
        return self::getError(58010, "OntIdTx Error,BlockHeight not match");
    }

    public static function NodesNotMatch()
    {
        return self::getError(58011, "OntIdTx Error,nodes not match");
    }

    public static function ResultIsNull()
    {
        return self::getError(58012, "OntIdTx Error,result is null");
    }

    public static function CreateOntIdClaimErr()
    {
        return self::getError(58013, "OntIdTx Error, createOntIdClaim error");
    }

    public static function VerifyOntIdClaimErr()
    {
        return self::getError(58014, "OntIdTx Error, verifyOntIdClaim error");
    }

    public static function WriteVarBytesError()
    {
        return self::getError(58015, "OntIdTx Error, writeVarBytes error");
    }

    public static function SendRawTransactionPreExec()
    {
        return self::getError(58016, "OntIdTx Error, sendRawTransaction PreExec error");
    }

    public static function SenderAmtNotEqPasswordAmt()
    {
        return self::getError(58017, "OntIdTx Error, senders amount is not equal password amount");
    }


    //OntAsset Error
    public static function AssetNameError()
    {
        return self::getError(58101, "OntAsset Error,asset name error");
    }

    public static function DidError()
    {
        return self::getError(58102, "OntAsset Error,Did error");
    }

    public static function NullPkId()
    {
        return self::getError(58103, "OntAsset Error,null pkId");
    }

    public static function NullClaimId()
    {
        return self::getError(58104, "OntAsset Error,null claimId");
    }

    public static function AmountError()
    {
        return self::getError(58105, "OntAsset Error,amount is less than or equal to zero");
    }


    //RecordTx Error
    public static function NullKeyOrValue()
    {
        return self::getError(58201, "RecordTx Error,null key or value");
    }

    public static function NullKey()
    {
        return self::getError(58202, "RecordTx Error,null  key");
    }


    //OntSdk Error
    public static function WebsocketNotInit()
    {
        return self::getError(58301, "OntSdk Error,websocket not init");
    }

    public static function ConnRestfulNotInit()
    {
        return self::getError(58302, "OntSdk Error,connRestful not init");
    }


    //abi error
    public static function SetParamsValueValueNumError()
    {
        return self::getError(58401, "AbiFunction Error,setParamsValue value num error");
    }

    public static function InvalidUrlErr()
    {
        return self::getError(58402, "Interfaces Error,Invalid url:");
    }

    public static function InvalidUrl($msg)
    {
        return self::getError(58403, "Invalid url:" . $msg);
    }

    //WalletManager Error
    public static function GetAccountByAddressErr()
    {
        return self::getError(58501, "WalletManager Error,getAccountByAddress err");
    }


    public static function OtherError($msg)
    {
        return self::getError(59000, "Other Error," . $msg);
    }
}