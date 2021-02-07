<?php

namespace App\Interfaces;

/**
 * Abstract factory for complete set of one car model
 */
interface IAutoEquipment
{
    /**
     * Get engine from concrete auto equipment
     * @return IEngine
     */
    public function getEngine(): IEngine;

    /**
     * Get engine from concrete auto equipment
     * @return ITransmission
     */
    public function getTransmission(): ITransmission;
}
