<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午7:53
 */

namespace Ontology\Tests\Crypto;


use Ontology\Crypto\KeyType;
use PHPUnit\Framework\TestCase;

class KeyTypeTest extends TestCase
{
    public function testKeyType():void {
        echo "\n";
        $keyType1 = new KeyType(KeyType::ECDSA);
        echo $keyType1."\n";
        $keyType2 = KeyType::SM2;
        echo $keyType2."\n";
        $keyType3 = KeyType::EDDSA;
        echo $keyType3."\n";
    }
}