<?php

namespace App\Services;

use App\Interfaces\IPermissionChecker;
use App\Interfaces\IRedButton;

/**
 * Class RedButtonProxy
 */
class RedButtonProxy implements IRedButton
{
    /**
     * @var IRedButton
     */
    private IRedButton $redButton;
    /**
     * @var IPermissionChecker
     */
    private IPermissionChecker $checker;

    public function __construct(IRedButton $redButton, IPermissionChecker $checker)
    {
        $this->redButton = $redButton;
        $this->checker = $checker;
    }

    /**
     * @inheritDoc
     */
    public function push(): void
    {
        $this->checker->checkPermission('pushRedButton');
        $this->redButton->push();
    }
}
