<?php

namespace App\Services;

use App\Interfaces\ITemperature;
use App\Models\TemperatureFahrenheit;

/**
 * Class CelsiusThermometer
 */
class FahrenheitThermometer extends AbstractThermometer
{
    /**
     * @inheritDoc
     */
    final public function getTemperature(): ITemperature
    {
        $celsiusTemperature = $this->weatherRepository->getTomorrowTemperature();
        return new TemperatureFahrenheit(($celsiusTemperature * 9 / 5) + 32);
    }
}
