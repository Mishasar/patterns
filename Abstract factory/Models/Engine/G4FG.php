<?php

namespace App\Models\Engine;

/**
 * Engine Hyundai G4FG
 */
class G4FG implements \App\Interfaces\IEngine
{
    /**
     * @var string
     */
    private $name = 'Hyundai G4FG';

    /**
     * @var int
     */
    private $power = 123;

    /**
     * @return string
     */
    final public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    final public function getPower(): int
    {
        return $this->power;
    }
}
