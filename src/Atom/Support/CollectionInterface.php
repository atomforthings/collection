<?php

namespace Atom\Support;

use Countable;
use IteratorAggregate;
use ArrayAccess;

interface CollectionInterface extends Countable, IteratorAggregate, ArrayAccess {

	public function count();
	public function getIterator();

	public function offsetExists($offset);
	public function offsetGet($offset);
	public function offsetSet($offset, $value);
	public function offsetUnset($offset);
	
}