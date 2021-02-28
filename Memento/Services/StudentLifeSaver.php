<?php

namespace App\Services;

/**
 * Class Caretaker
 * @package App\Services
 */
class StudentLifeSaver
{
    /**
     * @var Memento
     */
    private $memento;

    /**
     * @return Memento
     */
    public function getMemento(): Memento
    {
        return $this->memento;
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }
}
