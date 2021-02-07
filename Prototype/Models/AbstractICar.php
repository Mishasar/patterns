<?php

namespace App\Models;

use App\Interfaces\ICar;

/**
 * Class VAZ2101
 */
abstract class AbstractICar implements ICar
{
    /**
     * @var string
     */
    protected $manufacturer;

    /**
     * @var int
     */
    protected $model;

    /**
     * @var string
     */
    protected $vin;

    /**
     * @return $this
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    /**
     * @return int
     */
    public function getModel(): int
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getVin(): string
    {
        return $this->vin;
    }
}
