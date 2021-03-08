<?php


namespace App\Services;

/**
 * Class OzonInformationService
 * @package App\Services\
 */
class OzonInformationService extends ProductInformationService
{
    /**
     * @inheritDoc
     */
    protected function generatePrice(string $productName): string
    {
        // $price = $this->ozonApi->getCost($productName);
        $price = 967.70; // from amazon api

        return sprintf("Cost: %s \n",
            $price
        );
    }
}
