<?php


namespace App\Commands;


use App\Interfaces\ICommand;
use App\Services\Light;

/**
 * Class SwitchOn
 * @package App\Commands
 */
class SwitchOnCommand implements ICommand
{
    /**
     * @var Light
     */
    private $light;

    /**
     * SwithOn constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->turnOn();
    }
}
