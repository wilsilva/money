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

if (!function_exists('adding_interest')) {
    function adding_interest($value, int $interest, string $moneyType = null) {
        $factory = new MoneyFactory($moneyType);
        $money = $factory->loadTypeMoney();
        $money->init($value);
        $money->addingInterest($interest);
        return $money->getMoney();
    }
}

if (!function_exists('add')) {
    function add($value, int $valueToAdd, string $moneyType = null) {
        $factory = new MoneyFactory($moneyType);
        $money = $factory->loadTypeMoney();
        $money->init($value);
        $money->add($valueToAdd);
        return $money->getMoney();
    }
}

if (!function_exists('multiply')) {
    function multiply($value, int $valueToMultiply, string $moneyType = null) {
        $factory = new MoneyFactory($moneyType);
        $money = $factory->loadTypeMoney();
        $money->init($value);
        $money->multiply($valueToMultiply);
        return $money->getMoney();
    }
}

if (!function_exists('subtract')) {
    function subtract($value, int $valueToSubtract, string $moneyType = null) {
        $factory = new MoneyFactory($moneyType);
        $money = $factory->loadTypeMoney();
        $money->init($value);
        $money->subtract($valueToSubtract);
        return $money->getMoney();
    }
}

if (!function_exists('divide')) {
    function divide($value, int $valueToDivide, string $moneyType = null) {
        $factory = new MoneyFactory($moneyType);
        $money = $factory->loadTypeMoney();
        $money->init($value);
        $money->divide($valueToDivide);
        return $money->getMoney();
    }
}
