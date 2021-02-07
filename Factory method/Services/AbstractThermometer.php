<?php

namespace App\Services;

use App\Interfaces\IWeatherRepository;
use App\Interfaces\ITemperature;

/**
 * Class AbstractThermometer
 */
abstract class AbstractThermometer
{
    /**
     * @var IWeatherRepository
     */
    protected $weatherRepository;

    /**
     * AbstractThermometer constructor.
     * @param IWeatherRepository $weatherRepository
     */
    public function __construct(IWeatherRepository $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    /**
     * @return ITemperature
     */
    abstract public function getTemperature(): ITemperature;

    /**
     * @return string
     */
    final public function format(): string
    {
        $t = $this->getTemperature();
        return sprintf("Current temperature %s %s. \n", $t->getValue(), $t->getPhysicalQuantity());
    }
}
