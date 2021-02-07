<?php

namespace App\Interfaces;

/**
 * Concrete object - car transmission
 */
interface ITransmission
{
    /**
     * Transmission name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Transmission type
     *
     * @return string
     */
    public function getType(): string;
}
