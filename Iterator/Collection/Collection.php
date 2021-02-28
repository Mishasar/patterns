<?php

namespace App\Collection;

use App\Iterators\AscIterator;
use App\Iterators\DescIterator;
use Iterator;

/**
 * Class Collection
 * @package App\Collection
 */
class Collection implements \IteratorAggregate
{
    private $items = [];

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $item
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        return new AscIterator($this);
    }

    /**
     * @return Iterator
     */
    public function getReverseIterator(): Iterator
    {
        return new DescIterator($this, true);
    }
}
