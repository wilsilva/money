<?php

use WilSilva\Money\Factory\MoneyFactory;
use WilSilva\Money\MoneyUSD;

/**
 *
 */
class MoneyFactoryTest extends PHPUnit_Framework_TestCase {

	public function testLoadTypeMoney() {
		$moneyFactory = new MoneyFactory('USD');
		$this->assertTrue($moneyFactory->loadTypeMoney() instanceof MoneyUSD);
	}

}