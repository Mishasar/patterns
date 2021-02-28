<?php


namespace App\Services;


class BaseService
{
    protected $mediator;

    final public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}

