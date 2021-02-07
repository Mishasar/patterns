<?php

namespace App\Interfaces;

/**
 * Interface for temperature
 */
interface ITemperature
{
    /**
     * @return float
     */
    public function getValue(): float;

    /**
     * @return string
     */
    public function getPhysicalQuantity(): string;
}
