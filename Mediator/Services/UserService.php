<?php

namespace App\Services;

/**
 * Class UserService
 * @package App\Services
 */
class UserService extends BaseService
{
    public function createUser(): void
    {
        $this->mediator->notify($this, "CREATE_USER");
    }

    public function notifyNewUser(): void
    {
        echo "User is created.\n";
        $this->mediator->notify($this, "NOTIFY_NEW_USER");
    }
}
