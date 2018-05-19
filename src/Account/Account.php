<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午7:29
 */

namespace Ontology\Account;

class Account
{
    private $keyType; // KeyType
    private $curveParams; // Object[]
    private $privateKey; // PrivateKey
    private $publicKey; // PublicKey
    private $addressU160; // Address
    private $signatureScheme; // SignatureScheme

    public function __construct()
    {
        echo "数构造方法被调用\n";

        $args = func_get_args();
        $num  = func_num_args();

        if(function_exists($this, $f="__construct".$num)) {
            call_user_func_array(array($this, $f), $args);
        } else {
            echo "无参数构造方法被调用\n";
        }
    }

    public function __construct1()
    {

    }
}