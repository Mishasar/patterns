<?php

namespace App\Interfaces;

/**
 * Concrete object - car engine
 */
interface IEngine
{
    /**
     * Engine name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Engine power in hp
     *
     * @return int
     */
    public function getPower(): int;
}
