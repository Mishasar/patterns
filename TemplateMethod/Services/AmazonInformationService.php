<?php


namespace App\Services;

/**
 * Class AmazonInformationService
 * @package App\Services\
 */
class AmazonInformationService extends ProductInformationService
{
    /**
     * @inheritDoc
     */
    protected function generatePrice(string $productName): string
    {
        // $price = $this->amazonApi->getPrice($productName);
        $price = 20; // from amazon api

        return sprintf("Cost: %s \n",
            $this->convertToRubles($price)
        );
    }

    /**
     * @param float $dollars
     * @return float
     */
    private function convertToRubles(float $dollars): float
    {
        return $dollars * 30; // return my 2007
    }
}
