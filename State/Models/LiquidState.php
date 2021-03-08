<?php

namespace App\Models;

/**
 * Class LiquidState
 * @package App\Models
 */
class LiquidState extends State
{
    protected const NAME = 'Liquid';

    /**
     *
     */
    public function heat(): void
    {
        echo "Set gaseous state \n";
        $this->context->transitionTo(new GaseousState());
    }

    /**
     *
     */
    public function freeze(): void
    {
        echo "Set solid state";
        $this->context->transitionTo(new SolidState());
    }
}
