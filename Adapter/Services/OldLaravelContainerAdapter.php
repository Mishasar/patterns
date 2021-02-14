<?php

namespace App\Services;

use Psr\Container\ContainerInterface;

/**
 * Class OldLaravelContainerAdapter
 * Psr adapter for old laravel container
 */
class OldLaravelContainerAdapter implements ContainerInterface
{
    /**
     * @param string $id
     * @return mixed
     */
    public function get(string $id): mixed
    {
        return app()->make($id);
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool
    {
        return app()->offsetExists($id);
    }
}
