<?php

namespace App\Services;

/**
 * Class Cache
 * @package App\Services
 */
class CacheDriver extends Singleton
{
    private $storage = [];

    /**
     * @param string $key
     * @return string
     */
    final public function getValue(string $key): string
    {
        return $this->storage[$key];
    }

    /**
     * @param string $key
     * @param string $value
     */
    final public function setValue(string $key, string $value): void
    {
        $this->storage[$key] = $value;
    }
}
