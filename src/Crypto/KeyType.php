<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午7:50
 */

namespace Ontology\Crypto;

use MyCLabs\Enum\Enum;

class KeyType extends Enum
{
    const ECDSA = 0x12;
    const SM2 = 0x13;
    const EDDSA = 0x14;
}