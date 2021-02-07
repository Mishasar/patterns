<?php

namespace App\Services;

use App\Interfaces\ITemperature;
use App\Models\TemperatureCelsius;

/**
 * Class CelsiusThermometer
 */
class CelsiusThermometer extends AbstractThermometer
{
    /**
     * @inheritDoc
     */
    final public function getTemperature(): ITemperature
    {
        return new TemperatureCelsius($this->weatherRepository->getTomorrowTemperature());
    }
}
