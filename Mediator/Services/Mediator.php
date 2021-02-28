<?php

namespace App\Services;

use App\Interfaces\IMediator;

/**
 * Class Mediator
 * @package App\Services
 */
class Mediator implements IMediator
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * @var RoleService
     */
    private $roleService;

    /**
     * Mediator constructor.
     * @param UserService $userService
     * @param RoleService $roleService
     */
    public function __construct(UserService $userService, RoleService $roleService)
    {
        $userService->setMediator($this);
        $roleService->setMediator($this);

        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    /**
     * @param object $sender
     * @param string $event
     */
    public function notify(object $sender, string $event): void
    {
        if ($event === "CREATE_USER") {
            $this->userService->notifyNewUser();
            $this->roleService->notifyEmptyRole();
        }

        if ($event === "CREATE_ROLE") {
            $this->roleService->notifyNewRole();
        }
    }
}
