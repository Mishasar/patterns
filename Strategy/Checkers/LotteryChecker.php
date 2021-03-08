<?php


namespace App\Checkers;

use App\Interfaces\IChecker;

/**
 * Class LotteryChecker
 * @package App\Checkers
 */
class LotteryChecker implements IChecker
{
    /**
     * @return bool
     */
    public function check(): bool
    {
        $userIsCanAddLottery = false;
        // another checks
        // example, currentUser->isAdmin()

        return $userIsCanAddLottery;
    }
}
