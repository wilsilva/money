<?php

namespace WilSilva\Money;

use Illuminate\Support\ServiceProvider;

class MoneyServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {

		return $this->app->singleton(Money::class, function ($app) {
			return new Money();
		});
	}
}
