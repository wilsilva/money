<?php

use WilSilva\Money\MoneyBRL;

/**
 *
 */
class MoneyBRLTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->money = new MoneyBRL;
	}
	public function testMoneyBRLConstructor() {
		$this->assertTrue($this->money instanceof MoneyBRL);
	}

	public function testConvertNumberToMoney() {
		$this->assertEquals($this->money->convertNumberToMoney(15.55), "R$15,55");
	}

	public function testConvertMoneyToNumber() {
		$this->assertEquals($this->money->convertMoneyToNumber("R$15,55"), 15.55);
	}
}