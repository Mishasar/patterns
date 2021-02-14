<?php


namespace App\Services;

/**
 * Class PermissionChecker
 */
class PermissionChecker implements \App\Interfaces\IPermissionChecker
{
    /**
     * @inheritDoc
     */
    public function checkPermission(string $permission): bool
    {
        throw new \RuntimeException('Never do this!');
    }
}
