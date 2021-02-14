<?php

namespace App\Services;

use App\Interfaces\IUserCreator;

/**
 * Login checker decorator
 */
class LoginCheckerDecorator implements IUserCreator
{
    /**
     * @var IUserCreator
     */
    private IUserCreator $creator;

    /**
     * LoginCheckerDecorator constructor.
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
        if (User::where('login', $email)->count() > 0) {
            throw new \RuntimeException('User exist');
        }

        $this->creator->createUser($email, $password);
    }
}
