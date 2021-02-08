<?php

namespace App\Models\Transmission;

/**
 * Transmission Mercedes 6AKPP
 */
class Mercedes6AKPP implements \App\Interfaces\ITransmission
{
    /**
     * @var string
     */
    private $name = 'Mercedes 6AKPP';

    /**
     * @var string
     */
    private $type = 'manual';

    /**
     * @return string
     */
    final public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    final public function getType(): string
    {
        return $this->type;
    }
}
