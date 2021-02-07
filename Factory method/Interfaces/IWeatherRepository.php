<?php

namespace App\Interfaces;

/**
 * Interface WeatherRepository
 */
interface IWeatherRepository
{
    /**
     * Return tomorrow temperature from concrete location
     * @return int
     */
    public function getTomorrowTemperature(): int;
}
