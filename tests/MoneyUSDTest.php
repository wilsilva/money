<?php

use WilSilva\Money\MoneyUSD;

/**
 *
 */
class MoneyUSDTest extends PHPUnit_Framework_TestCase {

	private $moneyUSD;

	public function setUp() {
		$this->moneyUSD = new MoneyUSD;
	}
	public function testMoneyUSDConstructor() {

		$this->assertTrue($this->moneyUSD instanceof MoneyUSD);
	}

	public function testConvertNumberToMoney() {
		# code...

		$this->assertEquals($this->moneyUSD->convertNumberToMoney(15.55), "$15,55");
	}

	public function testConvertMoneyToNumber() {
		# code...

		$this->assertEquals($this->moneyUSD->convertMoneyToNumber("$15,55"), 15.55);
	}
}