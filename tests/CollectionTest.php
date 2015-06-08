<?php

use Atom\Support\AbstractCollection;

class CollectionTest extends PHPUnit_Framework_TestCase {

	public function testCollectionClass() {
		 $stub = $this->getMockForAbstractClass('Atom\Support\AbstractCollection', []);
		 $stub->method('count')
             ->willReturn(true);
	}

	public function testforEach() {
		 $stub = $this->getMockForAbstractClass('Atom\Support\AbstractCollection', [1,2,3]);
		 $stub->method('count')
             ->willReturn(3);
	}
	
}