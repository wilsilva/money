<?php

namespace WilSilva\Money;

use Illuminate\Support\ServiceProvider;
use WilSilva\Money\Factory\MoneyFactory;

class MoneyServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->publishes([
			__DIR__ . '/Config/money.php' => config_path('money.php'),
		], 'config');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		//register config file
		$this->mergeConfigFrom(__DIR__ . '/Config/money.php', 'money');

		return $this->app->singleton(Money::class, function ($app) {
			$moneyFactory = new MoneyFactory();
			return $moneyFactory->loadTypeMoney();
		});
	}
}
