<?php

namespace App\Models;

use App\Interfaces\ITemperature;

/**
 * Class TemperatureCelsius
 */
class TemperatureCelsius implements ITemperature
{
    public const QUANTITY_NAME = '°C';

    /**
     * @var float
     */
    private $value;

    /**
     * TemperatureCelsius constructor.
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    final public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return string
     */
    final public function getPhysicalQuantity(): string
    {
        return self::QUANTITY_NAME;
    }
}
