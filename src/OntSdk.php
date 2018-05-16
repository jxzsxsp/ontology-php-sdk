<?php

declare(strict_types=1);

namespace Ontology;

class OntSdk {

	private $hi = "Hello ";

	public function hi($name):string {
	    return $this->hi.$name;
	}

	public function add($a, $b):int {
		return $a + $b;
	}

}

?>
