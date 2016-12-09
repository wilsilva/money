<?php

namespace WilSilva\Money\Facade;

use Illuminate\Support\Facades\Facade;
use WilSilva\Money\Money;

/**
 *
 */
class MoneyFacade extends Facade {

	protected static function getFacadeAccessor() {return Money::class;}
}