<?php

namespace WilSilva\Money;

/**
 *
 */
interface Money {

	public function converNumberToMoney(float $number): string;
	public function convertMoneyToNumber(string $money): float;
}