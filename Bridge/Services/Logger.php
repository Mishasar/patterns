<?php

namespace App\Services;

use Exception;
use Psr\Log\LoggerInterface;

/**
 * Class Logger
 * @package App\Services
 */
class Logger
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * Logger constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function saveException(Exception $exception)
    {
        $this->logger->log('error', $exception->getMessage());
    }
}
