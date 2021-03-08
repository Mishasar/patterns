<?php


namespace App\Interfaces;

/**
 * Interface ICheckerHandler
 * @package App\Interfaces
 */
interface IChecker
{
    /**
     * @return bool
     */
    public function check(): bool;
}
