<?php

namespace App\Iterators;

use App\Collection\Collection;
use Iterator;

/**
 * Class AscIterator
 * @package App\Iterators
 */
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

    /**
     * AscIterator constructor.
     * @param Collection $collection
     */
    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     *
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->collection->getItems()[$this->position];
    }

    /**
     * @return bool|float|int|string|null
     */
    public function key()
    {
        return $this->position;
    }

    /**
     *
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
