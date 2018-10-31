<?php

declare(strict_types=1);

/**
 * Created by IntelliJ IDEA.
 * User: Sean.Xiao<jxzsxsp@qq.com>
 * Date: 2018/5/16
 * Time: 下午4:05
 */

namespace Ontology;

class OntSdk
{

    private $ontSdk;

    public function __construct()
    {
    }

    public function getInstance():OntSdk {

        if(!isset($this->ontSdk)){
            $this->ontSdk = new OntSdk();
        }

        return $this->ontSdk;
    }

}
