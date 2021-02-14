<?php

namespace App\Interfaces;

/**
 * Interface IUserCreator
 * @package App\Interfaces
 */
interface IUserCreator
{
    /**
     * @param string $email
     * @param string $password
     */
    public function createUser(string $email, string $password): void;
}
