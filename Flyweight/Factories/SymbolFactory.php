<?php

namespace App\Factories;

use App\Models\Size;
use App\Models\Symbol;
use App\Models\SymbolA;
use App\Models\SymbolB;

class SymbolFactory
{
    /**
     * @var Size
     */
    private $size;

    /**
     * @var Symbol[]
     */
    private $symbols = array();

    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function getSymbol($key)
    {
        if (!array_key_exists($key, $this->symbols)) {
            switch ($key) {
                case 'A':
                    $this->symbols[$key] = new SymbolA($this->size);
                    break;
                case 'B':
                    $this->symbols[$key] = new SymbolB($this->size);
                    break;
            }
        }

        return $this->symbols[$key];
    }
}
