<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/22
 * Time: 上午10:13
 */

namespace Ontology\Tests\Common;


use Ontology\Common\ErrorCode;
use PHPUnit\Framework\TestCase;

class ErrorCodeTest extends TestCase
{

    public function testError() {
        $msg = ErrorCode::AmountError();
        echo "\n";
        echo $msg;
        echo "\n";
    }

}