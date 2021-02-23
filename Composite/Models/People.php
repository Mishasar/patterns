<?php

namespace App\Models;

class People extends Tree
{
    public function view(string $padding = '')
    {
        echo($padding . $this->name . "\n");
    }
}
