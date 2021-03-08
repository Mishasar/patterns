<?php


namespace App\Checkers;

use App\Interfaces\IChecker;

/**
 * Class GoodsChecker
 * @package App\Checkers
 */
class GoodsChecker implements IChecker
{
    /**
     * @return bool
     */
    public function check(): bool
    {
        $userIsCanAddGoods = true;
        // another checks
        // example, currentUser->isAdmin()

        return $userIsCanAddGoods;
    }
}
