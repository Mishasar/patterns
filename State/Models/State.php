<?php

namespace App\Models;

/**
 * Class State
 * @package App\Models
 */
abstract class State
{
    /**
     * State name
     */
    protected const NAME = '';

    /**
     * @var Substance
     */
    protected $context;

    /**
     * @param Substance $context
     */
    final public function setContext(Substance $context): void
    {
        $this->context = $context;
    }

    /**
     *
     */
    abstract public function heat(): void;

    /**
     *
     */
    abstract public function freeze(): void;

    /**
     * @return string
     */
    final public function getName()
    {
        return static::NAME;
    }
}
