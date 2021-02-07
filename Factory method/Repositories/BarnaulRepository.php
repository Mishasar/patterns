<?php

namespace App\Repositories;

use App\Interfaces\IWeatherRepository;

/**
 * Class BarnaulRepository
 * Easter egg. My hometown (more precisely Sorochy Log). Hello to all fellow countrymen!
 */
class BarnaulRepository implements IWeatherRepository
{
    /**
     * @inheritDoc
     */
    final public function getTomorrowTemperature(): int
    {
        return -25;
    }
}
