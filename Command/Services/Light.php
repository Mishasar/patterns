<?php

namespace App\Services;

/**
 * Class Light
 * @package App\Services
 */
class Light
{
    final public function turnOn(): void
    {
        echo "The light is on \n";
    }

    final public function turnOff(): void
    {
        echo "The light is off \n";
    }
}
