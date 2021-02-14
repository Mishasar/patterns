<?php

namespace App\Services;

use App\Interfaces\IUserCreator;

/**
 * Notification
 */
class NotificationDecorator implements IUserCreator
{
    /**
     * @var IUserCreator
     */
    private IUserCreator $creator;

    /**
     * NotificationDecorator constructor.
     * @param IUserCreator $creator
     */
    public function __construct(IUserCreator $creator)
    {
        $this->creator = $creator;
    }

    /**
     * @inheritDoc
     */
    public function createUser(string $email, string $password): void
    {
        $this->creator->createUser($email, $password);
        mail('admin@mail.ru', 'New user', $email);
    }
}
