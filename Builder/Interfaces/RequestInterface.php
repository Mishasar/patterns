<?php

namespace App\Interfaces;

/**
 * Request interface
 * This interface is presented as an example.
 * For real projects please use RequestInterface from PSR-7 (https://www.php-fig.org/psr/psr-7/)
 */
interface RequestInterface
{
    /**
     * @param string $method
     */
    public function withMethod(string $method): void;

    /**
     * @param string $version
     */
    public function withProtocolVersion(string $version): void;

    /**
     * @param string $name
     * @param string $value
     */
    public function withHeader(string $name, string $value): void;

    /**
     * @param string $body
     */
    public function withBody(string $body): void;

    /**
     * @return string
     */
    public function getHTTPRequest(): string;
}
