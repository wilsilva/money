<?php

namespace WilSilva\Money;

/**
 *
 */
interface Money {

	const BRL = "R$ ";
	const USD = "$ ";

	public function convertNumberToMoney(float $number): string;
	public function convertMoneyToNumber(string $money): float;
}