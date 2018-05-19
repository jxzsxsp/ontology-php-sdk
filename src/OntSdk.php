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

	private $hi = "Hello ";

	public function hi($name):string {
	    return $this->hi.$name;
	}

	public function add($a, $b):int {
		return $a + $b;
	}

}
