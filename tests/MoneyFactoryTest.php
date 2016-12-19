<?php

use WilSilva\Money\Factory\MoneyFactory;
use WilSilva\Money\MoneyUSD;

/**
 *
 */
class MoneyFactoryTest extends PHPUnit_Framework_TestCase {

	private $moneyFactory;
	public function setUp() {
		$this->moneyFactory = new MoneyFactory("USD");
	}
	public function testLoadTypeMoney() {
		$this->assertTrue($this->moneyFactory->loadTypeMoney() instanceof MoneyUSD);
	}

}