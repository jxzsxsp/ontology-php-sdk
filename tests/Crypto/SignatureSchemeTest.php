<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/17
 * Time: 下午3:06
 */

namespace Ontology\Tests\Crypto;

use Ontology\Crypto\SignatureScheme;
use PHPUnit\Framework\TestCase;

class SignatureSchemeTest extends TestCase
{
    public function testSignatureScheme() {
        echo SignatureScheme::SHA256WITHECDSA."\n";
        $hash_algos = hash_algos();
        var_dump($hash_algos);

        $hash = hash("sha256", "Hello", true);
        var_dump($hash);
    }

}