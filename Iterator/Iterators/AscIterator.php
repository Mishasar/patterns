<?php

namespace App\Iterators;

use App\Collection\Collection;
use Iterator;

class AscIterator implements Iterator
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}