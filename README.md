# Laravel Convert Money

[![Latest Stable Version](https://poser.pugx.org/wilsilva/money/v/stable)](https://packagist.org/packages/wilsilva/money)
[![Latest Unstable Version](https://poser.pugx.org/wilsilva/money/v/unstable)](https://packagist.org/packages/wilsilva/money)
[![Total Downloads](https://poser.pugx.org/wilsilva/money/downloads)](https://packagist.org/packages/wilsilva/money)
[![License](https://poser.pugx.org/wilsilva/money/license)](https://packagist.org/packages/wilsilva/money)
[![composer.lock](https://poser.pugx.org/wilsilva/money/composerlock)](https://packagist.org/packages/wilsilva/money)

## Introduction

My first package, converting number into money.

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

echo Money::convertNumberToMoney(99.90); // dump $ 99,90
// or
echo Money::convertMoneyToNumber("$ 99,90"); // dump float 99.90
```

### Helpers

```
 convert_number_to_money(15.50, "BRL"); // dump R$ 15,50

 convert_money_to_number("R$2000,00", "BRL"); // dump 2000.00

 offer_descount("$100,00", 20, "USD"); // $ 80,00
 
 adding_interest("$100,00", 20, "USD"); // $ 120,00

 add("110,00", "20", "USD"); // $ 130,00

 subtract(80, "40", "BRL"); // R$ 40,00

 multiply(50, "3", "BRL"); // R$ 150,00

 divide(100, "2", "USD"); // $ 50,00

```

## License

The Money Library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
