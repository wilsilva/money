<?php

use WilSilva\Money\Factory\MoneyFactory;

if (!function_exists("convertNumberToMoney")) {
	function convertNumberToMoney(int $number = 0, string $moneyType = null) {

		if (empty($moneyType) || $moneyType == null) {
			$moneyType = config('money.money-type');
		}

		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertNumberToMoney($number);
	}
}

if (!function_exists("convertMoneyToNumber")) {
	function convertMoneyToNumber(string $money, $moneyType = null) {

		if (empty($moneyType) || $moneyType == null) {
			$moneyType = config('money.money-type');
		}

		$factory = new MoneyFactory($moneyType);
		return $factory->loadTypeMoney()->convertMoneyToNumber($money);
	}
}