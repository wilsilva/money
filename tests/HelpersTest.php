<?php

/**
 *
 */
class HelpersTest extends PHPUnit_Framework_TestCase {

	public function testConvertNumberToMoney() {
		$this->assertEquals(convert_number_to_money(15.50, "BRL"), "R$15,50");
	}

	public function testConvertMoneyToNumber() {
		$this->assertEquals(convert_money_to_number("R$2000,00", "BRL"), 2000.00);
	}

	public function testOfferDescount() {
		$this->assertEquals(offer_descount("$100,00", 20, "USD"), "$80,00");
	}
}