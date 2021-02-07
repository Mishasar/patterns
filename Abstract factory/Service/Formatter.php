<?php

namespace App\Service;

use App\Interfaces\IAutoEquipment;

class Formatter
{
    /**
     * @param IAutoEquipment $concreteAutoEquipment
     * @return string
     */
    public function format(IAutoEquipment $concreteAutoEquipment): string
    {
        $engine = $concreteAutoEquipment->getEngine();
        $transmission = $concreteAutoEquipment->getTransmission();

        return sprintf("It has a %s horsepower %s engine and an %s %s transmission.\n",
            $engine->getPower(),
            $engine->getName(),
            $transmission->getName(),
            $transmission->getType()
        );
    }
}
