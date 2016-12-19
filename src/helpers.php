<?php

use WilSilva\Money\Factory\MoneyFactory;

if (!function_exists("convert_number_to_money")) {
	function convert_number_to_money(float $number = 0, string $moneyType = null) {
		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertNumberToMoney($number);
	}
}

if (!function_exists("convert_money_to_number")) {
	function convert_money_to_number(string $money, $moneyType = null) {
		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertMoneyToNumber($money);
	}
}

if (!function_exists('offer_descount')) {
	function offer_descount($value, int $descount, string $moneyType = null) {
		$factory = new MoneyFactory($moneyType);
		$money = $factory->loadTypeMoney();
		$money->init($value);
		$money->offerDescount($descount);
		return $money->getMoney();
	}
}