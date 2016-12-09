<?php

namespace WilSilva\Money;

/**
 *
 */
class MoneyUSD implements Money {

	public function converNumberToMoney(float $number): string {
		return "$ " . number_format($number, 2, ',', '.');
	}

	public function convertMoneyToNumber(string $money): float {
		return (float) str_replace(',', '.', str_replace("$ ", "", $money));
	}
}