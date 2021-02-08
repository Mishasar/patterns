<?php

namespace App\Models\Engine;

/**
 * Engine Mercedes G4LC
 */
class G4LC implements \App\Interfaces\IEngine
{
    /**
     * @var string
     */
    private $name = 'Mercedes G4LC';

    /**
     * @var int
     */
    private $power = 100;

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
