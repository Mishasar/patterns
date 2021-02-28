<?php


namespace App\Interfaces;

/**
 * Interface ICheckerHandler
 * @package App\Interfaces
 */
interface ICheckerHandler
{
    /**
     * @param ICheckerHandler $handler
     * @return ICheckerHandler
     */
    public function setNext(ICheckerHandler $handler): ICheckerHandler;

    /**
     * @param string $userAction
     * @return bool
     */
    public function handle(string $userAction): bool;
}
