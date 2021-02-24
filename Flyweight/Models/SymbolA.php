<?php

namespace App\Models;

class SymbolA extends Symbol
{
    /**
     * SymbolA constructor.
     * @param Size $size
     */
    public function __construct(Size $size)
    {
        $this->symbol = 'A';
        $this->size = $size;
    }
}
