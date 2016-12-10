<?php

use WilSilva\Money\MoneyUSD;

/**
 *
 */
class MoneyUSDTest extends PHPUnit_Framework_TestCase {

	public function testMoneyUSDConstructor() {
		$moneyUSD = new MoneyUSD();
		$this->assertTrue($moneyUSD instanceof MoneyUSD);
	}

	public function testConvertNumberToMoney() {
		# code...
		$moneyUSD = new MoneyUSD();
		$this->assertEquals($moneyUSD->convertNumberToMoney(15.55), "$ 15,55");
	}

	public function testConvertMoneyToNumber() {
		# code...
		$moneyUSD = new MoneyUSD();
		$this->assertEquals($moneyUSD->convertMoneyToNumber("$ 15,55"), 15.55);
	}
}