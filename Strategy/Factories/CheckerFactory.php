<?php

namespace App\Factories;

use App\Checkers\GoodsChecker;
use App\Checkers\LotteryChecker;
use App\Interfaces\IChecker;

/**
 * Class CheckerFactory
 */
class CheckerFactory
{
    /**
     * @param string $type
     * @return IChecker
     */
    public function getChecker(string $type): IChecker
    {
        switch ($type) {
            case 'ADD_GOODS':
                return new GoodsChecker();
            case 'ADD_LOTTERY':
                return new LotteryChecker();
            default:
                throw new RuntimeException('Unexpected value');
        }
    }
}
