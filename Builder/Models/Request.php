<?php

namespace App\Models;

use App\Interfaces\RequestInterface;

/**
 * Class Request
 */
class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $method = 'GET';

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $version = '1.1';

    /**
     * @var string
     */
    private $headers = '';

    /**
     * @var string
     */
    private $body = '';

    /**
     * Request constructor.
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @param string $method
     */
    public function withMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param string $version
     */
    public function withProtocolVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function withHeader(string $name, string $value): void
    {
        $this->headers .= "\n$name:$value";
    }

    /**
     * @param string $body
     */
    public function withBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getHTTPRequest(): string
    {
        return sprintf(
            "%s %s HTTP/%s\nHost: %s%s\n\n%s",
            $this->method,
            parse_url($this->uri, PHP_URL_PATH) . (parse_url($this->uri, PHP_URL_QUERY) ? '?' . parse_url($this->uri, PHP_URL_PATH) : ''),
            $this->version,
            parse_url($this->uri, PHP_URL_HOST),
            $this->headers,
            $this->body
        );
    }
}
