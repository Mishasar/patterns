<?php

namespace App\Services;

/**
 * Class StateStorage
 * @package App\Services
 */
class LifeStateStorage {
    /**
     * @var string|null
     */
    private $state;

    /**
     * @param string $state
     */
    public function upgradeState(string $state) {
        $this->state .= $state;
    }

    public function getState() {
        return $this->state;
    }

    /**
     * @return Memento
     */
    public function createMemento(): Memento {
        return new Memento($this->state);
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento) {
        $this->state = $memento->getState();
    }
}
