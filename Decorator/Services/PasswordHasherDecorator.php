<?php

namespace App\Services;

use App\Interfaces\IUserCreator;

/**
 * Password hasher decorator
 */
class PasswordHasherDecorator implements IUserCreator
{
    /**
     * @var IUserCreator
     */
    private IUserCreator $creator;

    /**
     * PasswordHasherDecorator constructor.
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
        $this->creator->createUser($email, password_hash($password));
    }
}
