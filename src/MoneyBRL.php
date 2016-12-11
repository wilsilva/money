<?php

namespace WilSilva\Money;

/**
 *
 */
class MoneyBRL extends Money {

	public function convertNumberToMoney(float $number): string {
		return self::BRL . number_format($number, 2, ',', '.');
	}

	public function convertMoneyToNumber(string $money): float {
		return (float) str_replace(',', '.', str_replace(self::BRL, "", $money));
	}
}