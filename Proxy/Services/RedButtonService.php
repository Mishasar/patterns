<?php

namespace App\Services;

use App\Interfaces\IRedButton;

/**
 * Class RedButton
 */
class RedButtonService implements IRedButton
{
    /**
     * @return void
     */
    public function push(): void
    {
        echo 'Boom';
    }
}
