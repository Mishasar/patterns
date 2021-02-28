<?php

namespace App\Checkers;

use App\Interfaces\ICheckerHandler;

/**
 * Class BaseCheckerHandler
 * @package App\Checkers
 */
class BaseCheckerHandler implements ICheckerHandler
{

    /**
     * @var ICheckerHandler|null
     */
    private $nextHandler;

    /**
     * @param ICheckerHandler $handler
     * @return ICheckerHandler
     */
    final public function setNext(ICheckerHandler $handler): ICheckerHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * @param string $userAction
     * @return bool
     */
    public function handle(string $userAction): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($userAction);
        }

        return true;
    }
}
