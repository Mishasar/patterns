<?php


namespace App\Interfaces;

/**
 * Interface Car
 * @package App\Interfaces
 */
interface ICar
{
    /**
     * @return string
     */
    public function getManufacturer(): string;

    /**
     * @return int
     */
    public function getModel(): int;

    /**
     * @return string
     */
    public function getVin(): string;
}
