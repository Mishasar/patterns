<?php

namespace App\Models;

class SymbolB extends Symbol
{
    /**
     * SymbolB constructor.
     * @param Size $size
     */
    public function __construct(Size $size)
    {
        $this->symbol = 'B';
        $this->size = $size;
    }
}
