<?php

namespace App\Models\Transmission;

/**
 * Transmission Hyundai 6MKPP
 */
class Hyundai6MKPP implements \App\Interfaces\ITransmission
{
    /**
     * @var string
     */
    private $name = 'Hyundai 6MKPP';

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
