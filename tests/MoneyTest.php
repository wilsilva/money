<?php

use WilSilva\Money\MoneyBRL;

/**
 *
 */
class MoneyTest extends PHPUnit_Framework_TestCase {

	public function testOfferDescount() {
		# code...
		$money = new MoneyBRL;
		$money->init("R$200,00");
		$money->offerDescount(35);
		$this->assertEquals($money->getMoney(), "R$130,00");
	}
}