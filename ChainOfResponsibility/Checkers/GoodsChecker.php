<?php


namespace App\Checkers;

class GoodsChecker extends BaseCheckerHandler
{
    public function handle(string $userAction): bool
    {
        if ($userAction !== 'ADD_GOODS') {
            return parent::handle($userAction);
        }

        $userIsCanAddGoods = true;
        // another checks
        // example, currentUser->isAdmin()

        return $userIsCanAddGoods;
    }
}
