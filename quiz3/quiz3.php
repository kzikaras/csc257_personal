<?php


/**
 * calculateTax
 * @param int yearPurchased
 * @param int yearSold
 * @param float salePrice
 * @param float purchasePrice
 * @param string maritalStatus
 * @param float incomeLevel
 * @return float
 */
function calculateTax($yearPurchased, $yearSold, $salePrice, $purchasePrice, $maritalStatus, $incomeLevel) {
    // First calculate regular sales tax
    $taxRate = ($yearSold - $yearPurchased) > 1 ? 0.15 : 0.33;
    $salesTax = $salePrice * $taxRate;
    // Next, calculate capital gains tax
    $capitalTax = 0;
    $threshold = ($maritalStatus == 'single') ? 50000 : 80000;
    if ($incomeLevel > $threshold) {
        $capitalTax = ($salePrice - $threshold) * 0.15;
    }
    // What if the sale of the vehicle is under the threshold?
    if ($capitalTax < 0) {
        $capitalTax = 0;
    }
    $totalTaxAmount = $capitalTax + $salesTax;
    // Return just the tax amount
    return $totalTaxAmount;
}