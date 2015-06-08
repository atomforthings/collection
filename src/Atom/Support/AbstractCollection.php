<?php

namespace Atom\Support;

use ArrayIterator;

abstract class AbstractCollection implements CollectionInterface {

	protected $items = [];

	public function __construct($items = []) {
		$this->items = is_array($items) ? $items : array_push($this->items, $items);
	}

	public function count() {
		return count($this->items);
	}

	public function getIterator() {
		return new ArrayIterator($this->items);
	}

	public function offsetExists($offset) {
		return isset($this->items[$offset]);
	}

	public function offsetGet($offset) {
		return isset($this->items[$offset]) ? $this->items[$offset] : null;
	}

	public function offsetSet($offset, $value) {
		if (is_null($offset)) $this->items[] = $value;
		else $this->items[$offset] = $value;
	}

	public function offsetUnset($offset) {
		unset($this->items[$offset]);
	}

}
