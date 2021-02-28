<?php

namespace App\Services;

use App\Interfaces\ICommand;

class Switcher
{
    /**
     * @var ICommand[]
     */
    private $commands = [];

    /**
     * @param string $commandName
     * @param ICommand $command
     */
    public function register(string $commandName, ICommand $command): void
    {
        $this->commands[$commandName] = $command;
    }

    /**
     * @param string $commandName
     */
    public function execute(string $commandName)
    {
        $this->commands[$commandName]->execute();
    }
}
