<?php

namespace App\Models;

/**
 * Class Context
 * @package App\Models
 */
class Substance
{
    /**
     * @var State
     */
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * @param State $state
     */
    final public function transitionTo(State $state): void
    {
        echo "Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     *
     */
    final public function heat(): void
    {
        $this->state->heat();
    }

    /**
     *
     */
    final public function freeze(): void
    {
        $this->state->freeze();
    }
}
