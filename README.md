# Laravel Convert Money

[![Latest Stable Version](https://poser.pugx.org/wilsilva/money/v/stable)](https://packagist.org/packages/wilsilva/money)
[![Latest Unstable Version](https://poser.pugx.org/wilsilva/money/v/unstable)](https://packagist.org/packages/wilsilva/money)
[![Total Downloads](https://poser.pugx.org/wilsilva/money/downloads)](https://packagist.org/packages/wilsilva/money)
[![License](https://poser.pugx.org/wilsilva/money/license)](https://packagist.org/packages/wilsilva/money)
[![composer.lock](https://poser.pugx.org/wilsilva/money/composerlock)](https://packagist.org/packages/wilsilva/money)

## Introduction

My first package, convert number in money.

### Installation

To install Money, just run the following command:

```
	composer require wilsilva/money

```

### Configuration

After installing the Money library, register the `WilSilva\Money\MoneyServiceProvider` in your `config/app.php` configuration file:

```php

'providers' => [
    // Other service providers...

    WilSilva\Money\MoneyServiceProvider::class,
],
```

Add the `MoneyFacade` facade to the `aliases` array in your `app` configuration file:


```php
'Money' => WilSilva\Money\Facade\MoneyFacade::class,
```

To publish the config settings in Laravel 5 use:

```
	php artisan vendor:publish --provider="WilSilva\Money\MoneyServiceProvider"
```

If you change type money, only to change in config/money.php

```php

<?php //config file

return [
	'money-type' => 'USD', // change to BRL for example
];

	

```

### Usage


```php

	echo Money::converNumberToMoney(99.90); // dump $ 99,90
	// or
	echo Money::convertMoneyToNumber("$ 99,90"); // dump float 99.90

```

## License

The Money Library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
