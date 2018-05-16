<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午6:05
 */

namespace Ontology\Tests;

use Ontology\OntSdk;
use PHPUnit\Framework\TestCase;

class OntSdkTest extends TestCase
{

    public function testHi():void {
        $ontSdk = new OntSdk();
        echo $ontSdk->hi("Sean")."\n";
    }

    public function testAdd():void {
        $ontSdk = new OntSdk();
        echo $ontSdk->add(1, 2)."\n";
    }

}