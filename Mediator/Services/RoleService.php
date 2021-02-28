<?php


namespace App\Services;


class RoleService extends BaseService
{
    public function createRole(): void
    {
        $this->mediator->notify($this, "CREATE_ROLE");
    }

    public function notifyNewRole(): void
    {
        echo "Role is created.\n";
        $this->mediator->notify($this, "NOTIFY_NEW_ROLE");
    }

    public function notifyEmptyRole(): void
    {
        echo "Please, set role to new user.\n";
        $this->mediator->notify($this, "NOTIFY_NEW_ROLE");
    }
}
