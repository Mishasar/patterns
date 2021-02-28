<?php


namespace App\Services;

/**
 * Class BaseService
 * @package App\Services
 */
class BaseService
{
    /**
     * @var Mediator
     */
    protected $mediator;

    final public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}

