<?php

namespace App\Models;

abstract class Tree
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function view(string $padding = '');
}
