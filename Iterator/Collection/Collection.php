<?php

namespace App\Collection;

use App\Iterators\AscIterator;
use App\Iterators\DescIterator;
use Iterator;

class Collection implements \IteratorAggregate
{
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator(): Iterator
    {
        return new AscIterator($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new DescIterator($this, true);
    }
}
