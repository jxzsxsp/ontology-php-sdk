<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/17
 * Time: 下午3:01
 */

namespace Ontology\Crypto;


use MyCLabs\Enum\Enum;

class SignatureScheme extends Enum
{
    const SHA224WITHECDSA = "SHA224withECDSA"; // sha224
    const SHA256WITHECDSA = "SHA256withECDSA"; // sha256
    const SHA384WITHECDSA = "SHA384withECDSA"; // sha384
    const SHA512WITHECDSA = "SHA512withECDSA"; // sha512
    const SHA3_224WITHECDSA = "SHA3-224withECDSA"; // sha3-224
    const SHA3_256WITHECDSA = "SHA3-256withECDSA"; // sha3-256
    const SHA3_384WITHECDSA = "SHA3-384withECDSA"; // sha3-384
    const SHA3_512WITHECDSA = "SHA3-512withECDSA"; // sha3-512
    const RIPEMD160WITHECDSA = "RIPEMD160withECDSA"; // ripemd160

    const SM3WITHSM2 = "SM3withSM2";
}