<?php

namespace App\Interfaces;

/**
 * Interface Mediator
 * @package App\Interfaces
 */
interface IMediator
{
    public function notify(object $sender, string $event): void;
}
