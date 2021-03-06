<?php


namespace App\Services;

use SplSubject;

/**
 * Class LogService
 * @package App\Services
 */
class LogService implements \SplObserver
{
    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     */
    final public function update(SplSubject $subject): void
    {
        echo 'Logger save new row in clickhouse';
    }
}
