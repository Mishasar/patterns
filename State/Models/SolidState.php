<?php

namespace App\Models;

/**
 * Class SolidState
 * @package App\Models
 */
class SolidState extends State
{
    protected const NAME = 'Solid';

    /**
     *
     */
    public function heat(): void
    {
        echo "Set liquid state \n";
        $this->context->transitionTo(new LiquidState());
    }

    /**
     *
     */
    public function freeze(): void
    {
        echo "This is final state \n";
    }
}
