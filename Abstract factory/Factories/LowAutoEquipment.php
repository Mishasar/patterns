<?php

namespace App\Factories;

use App\Interfaces\IEngine;
use App\Interfaces\ITransmission;
use App\Models\Engine\G4LC;
use App\Models\Transmission\Hyundai6MKPP;

/**
 * Low auto equipment from Hyundai Solaris 2020
 */
class LowAutoEquipment implements \App\Interfaces\IAutoEquipment
{
    /**
     * @var IEngine
     */
    private $engine;

    /**
     * @var ITransmission
     */
    private $transmission;

    /**
     * LowAutoEquipment constructor.
     */
    public function __construct()
    {
        $this->engine = new G4LC();
        $this->transmission = new Hyundai6MKPP();
    }

    /**
     * @inheritDoc
     */
    final public function getEngine(): IEngine
    {
        return $this->engine;
    }

    /**
     * @inheritDoc
     */
    public function getTransmission(): ITransmission
    {
        return $this->transmission;
    }
}
