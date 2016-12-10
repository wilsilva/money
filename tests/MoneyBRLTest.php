<?php

use WilSilva\Money\MoneyBRL;

/**
 *
 */
class MoneyBRLTest extends PHPUnit_Framework_TestCase {

	public function testMoneyBRLConstructor() {
		$moneyBRL = new MoneyBRL();
		$this->assertTrue($moneyBRL instanceof MoneyBRL);
	}

	public function testConvertNumberToMoney() {
		# code...
		$moneyBRL = new MoneyBRL();
		$this->assertEquals($moneyBRL->convertNumberToMoney(15.55), "R$ 15,55");
	}

	public function testConvertMoneyToNumber() {
		# code...
		$moneyBRL = new MoneyBRL();
		$this->assertEquals($moneyBRL->convertMoneyToNumber("R$ 15,55"), 15.55);
	}
}