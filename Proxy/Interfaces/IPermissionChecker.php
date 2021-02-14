<?php

namespace App\Interfaces;

/**
 * Interface IPermissionChecker
 * @package App\Interfaces
 */
interface IPermissionChecker
{
    /**
     * @param string $permission
     * @return bool
     */
    public function checkPermission(string $permission): bool;
}
