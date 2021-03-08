<?php


namespace App\Services;

/**
 * Class ProductInformationService
 * @package App\Services
 */
abstract class ProductInformationService
{
    /**
     * @param string $productName
     * @return string
     */
    abstract protected function generatePrice(string $productName): string;

    /**
     * @param $productName
     * @return string
     */
    final public function getInformation($productName)
    {
        return sprintf(
            '%s%s%s%s',
            $this->generateBeautifulLine(),
            $this->generateName($productName),
            $this->generatePrice($productName),
            $this->generateBeautifulLine()
        );
    }

    /**
     * @param $productName
     * @return string
     */
    private function generateName($productName): string
    {
        return "This product be called: $productName. \n";
    }

    private function generateBeautifulLine()
    {
        return "-----------------------------------------\n";
    }
}
