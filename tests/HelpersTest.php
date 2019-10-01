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

	public  function testAddingInterest() {
        $this->assertEquals(adding_interest("$100,00", 20, "USD"), "$120,00");
    }

    public  function testAdd() {
        $this->assertEquals(add("$110,00", "20", "USD"), "$130,00");
    }

    public  function testSubtract() {
        $this->assertEquals(subtract(120.00, "20", "BRL"), "R$100,00");
    }

    public  function testMultiply() {
        $this->assertEquals(multiply(50.00,2, "USD"), "$100,00");
    }

    public  function testDivide() {
        $this->assertEquals(divide("100,00", "2", "BRL"), "R$50,00");
    }
}