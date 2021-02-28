<?php

namespace App\Services;

/**
 * Class Memento
 * @package App\Services
 */
class Memento
{
    /**
     * @var string
     */
    private $state;

    /**
     * Memento constructor.
     * @param string $state
     */
    public function __construct(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}
