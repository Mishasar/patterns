<?php

namespace App\Interfaces;

/**
 * Interface Command
 * @package App\Interfaces
 */
interface ICommand
{
    public function execute(): void;
}
