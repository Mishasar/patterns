<?php

namespace App\Models;

abstract class Symbol
{
    /**
     * @var string
     */
    protected $symbol;

    /**
     * @var Size
     */
    protected $size;

    public function display()
    {
        echo 'symbol: ' . $this->symbol . '. Size width: ' . $this->size->getWidth() . ', height: ' . $this->size->getHeight() . "\n";
    }
}
