<?php

namespace WilSilva\Money;

/**
 *
 */
abstract class Money {

	const BRL = "R$";
	const USD = "$";

	private $number;
	private $money;

	public function init($value): Money {
		# code...

		if (is_numeric($value)) {
			$this->number = $value;
			$this->money = $this->convertNumberToMoney($value);
		} elseif (is_string($value)) {
			$value = str_replace(" ", "", $value);
			$this->money = $value;
			$this->number = $this->convertMoneyToNumber($value);
		}

		return $this;
	}

	abstract public function convertNumberToMoney(float $number): string;
	abstract public function convertMoneyToNumber(string $money): float;

	public function getNumber(): float {
		return $this->number;
	}

	public function getMoney(): string {
		return $this->money;
	}

	public function offerDescount(int $descount) {
		$this->init($this->number - ($this->number * ($descount / 100)));
	}

	public function __toString() {
		return $this->money;
	}
}