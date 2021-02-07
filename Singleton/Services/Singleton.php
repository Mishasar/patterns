<?php


namespace App\Services;

/**
 * Class Singleton
 */
abstract class Singleton
{
    private static $instances = [];

    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}
