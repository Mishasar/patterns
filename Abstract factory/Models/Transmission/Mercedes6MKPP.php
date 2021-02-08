<?php

namespace App\Models\Transmission;

/**
 * Transmission Mercedes 6MKPP
 */
class Mercedes6MKPP implements \App\Interfaces\ITransmission
{
    /**
     * @var string
     */
    private $name = 'Mercedes 6MKPP';

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
