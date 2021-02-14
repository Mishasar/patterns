<?php

namespace App\Services;

use App\Interfaces\IUserCreator;

/**
 * Base user creator
 */
class UserCreator implements IUserCreator
{
    /**
     * @inheritDoc
     */
    public function createUser(string $email, string $password): void
    {
        $user = new User(); // Laravel active record
        $user->email = $email;
        $user->password = $password; // Not safe, please use hash
        $user->save();
    }
}
