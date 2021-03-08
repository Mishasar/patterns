<?php

namespace App\Models;

/**
 * Class GaseousState
 * @package App\Models
 */
class GaseousState extends State
{
    protected const NAME = 'Gaseous';

    /**
     *
     */
    public function heat(): void
    {
        echo "This is final state \n";
    }

    /**
     *
     */
    public function freeze(): void
    {
        echo "Set liquid state \n";
        $this->context->transitionTo(new LiquidState());
    }
}
