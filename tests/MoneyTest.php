<?php

use WilSilva\Money\Money;
use WilSilva\Money\MoneyBRL;

/**
 * Class of test money class
 */
class MoneyTest extends PHPUnit_Framework_TestCase {
	private $money;

	public function setUp() {
		$this->money = new MoneyBRL;
	}

	public function testInit() {

		$this->assertTrue($this->money->init(2000) instanceof Money);
	}

	public function testOfferDescount() {
		$this->money->init("R$200,00");
		$this->money->offerDescount(35);
		$this->assertEquals($this->money->getMoney(), "R$130,00");
	}

	public function testAddingInterest() {
		$this->money->init(200)->addingInterest(10);
		$this->assertEquals($this->money->getMoney(), "R$220,00");
	}

	public function testInstallment() {
		$this->money->init(200);
		$this->money->addingInterest(20);
		$this->assertEquals($this->money->installment(2), ["R$120,00", "R$120,00"]);
	}

	public function testAdd() {
		$this->money->init(200);
		$this->money->add(50);
		$this->assertEquals($this->money->getNumber(), 250);
	}

	public function testMultiply() {
		$this->money->init(100);
		$this->money->multiply(10);
		$this->assertEquals($this->money->getNumber(), 1000);
	}

    public function testSubtract() {
        $this->money->init(100);
        $this->money->subtract(10);
        $this->assertEquals($this->money->getNumber(), 90);
    }

	public function testDivide() {
		$this->money->init(100);
		$this->money->divide(2);
		$this->assertEquals($this->money->getNumber(), 50);
	}

	public function testToString() {

		$this->money->init(200);
		$this->assertEquals($this->money, "R$200,00");
	}
}
