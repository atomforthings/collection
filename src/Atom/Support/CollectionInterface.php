<?php

namespace Atom\Support;

use Countable;
use ArrayAccess;
use ArrayIterator;
use CachingIterator;
use JsonSerializable;
use IteratorAggregate;
use InvalidArgumentException;

interface Collection implements ArrayAccess, Countable, IteratorAggregate, JsonSerializable {
	;
}