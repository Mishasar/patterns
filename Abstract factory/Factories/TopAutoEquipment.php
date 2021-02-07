<?php

namespace App\Factories;

use App\Interfaces\IEngine;
use App\Interfaces\ITransmission;
use App\Models\Engine\G4FG;
use App\Models\Transmission\Hyundai6AKPP;

/**
 * Top auto equipment from Hyundai Solaris 2020
 */
class TopAutoEquipment implements \App\Interfaces\IAutoEquipment
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
        $this->engine = new G4FG();
        $this->transmission = new Hyundai6AKPP();
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
    final public function getTransmission(): ITransmission
    {
        return $this->transmission;
    }
}
