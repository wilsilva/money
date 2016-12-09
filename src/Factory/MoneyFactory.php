<?php

namespace WilSilva\Money\Factory;

use WilSilva\Money\MoneyBRL;
use WilSilva\Money\MoneyUSD;

/**
 *
 */
class MoneyFactory {

	private $moneyType;

	function __construct(string $moneyType = 'BRL') {
		$this->moneyType = $moneyType;
	}

	public function loadTypeMoney() {
		switch ($this->moneyType) {
		case 'BRL':
			return new MoneyBRL;
			break;
		case 'USD':
			return new MoneyUSD;
			break;

		default:
			return new MoneyBRL;
			break;
		}
	}
}