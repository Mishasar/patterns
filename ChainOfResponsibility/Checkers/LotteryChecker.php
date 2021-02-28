<?php


namespace App\Checkers;

class LotteryChecker extends BaseCheckerHandler
{
    public function handle(string $userAction): bool
    {
        if ($userAction !== 'ADD_LOTTERY') {
            return parent::handle($userAction);
        }

        $userIsCanAddLottery = false;
        // another checks
        // example, currentUser->isAdmin()

        return $userIsCanAddLottery;
    }
}
