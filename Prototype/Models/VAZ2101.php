<?php

namespace App\Models;

use App\Interfaces\ICar;

/**
 * Class VAZ2101
 */
class VAZ2101 extends AbstractICar
{
    /**
     * VAZ2101 constructor.
     * @param string $vin
     */
    public function __construct(string $vin)
    {
        $this->vin = $vin;
        $this->model = 2101;
        $this->manufacturer = 'VAZ';
    }

    public function __clone()
    {
        $this->vin = '';
    }

    /**
     * @param string $vin
     */
    public function setVin(string $vin): void
    {
        $this->vin = $vin;
    }
}
