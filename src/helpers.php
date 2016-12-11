<?php

use WilSilva\Money\Factory\MoneyFactory;

if (!function_exists("convert_number_to_money")) {
	function convert_number_to_money(float $number = 0, string $moneyType = null) {

		if (empty($moneyType) || $moneyType == null) {
			$moneyType = config('money.money-type');
		}

		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertNumberToMoney($number);
	}
}

if (!function_exists("convert_money_to_number")) {
	function convert_money_to_number(string $money, $moneyType = null) {

		if (empty($moneyType) || $moneyType == null) {
			$moneyType = config('money.money-type');
		}

		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertMoneyToNumber($money);
	}
}