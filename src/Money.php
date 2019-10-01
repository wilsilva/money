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
        if(is_string($descount)) {
            $descount = $this->convertMoneyToNumber($descount);
        }

		$this->init($this->number - ($this->number * ($descount / 100)));
	}

	public function addingInterest(int $interest) {
        if(is_string($interest)) {
            $interest = $this->convertMoneyToNumber($interest);
        }

		$this->init($this->number + ($this->number * ($interest / 100)));
	}

	public function installment($numberOfInstallments): array
	{
		$portion = $this->number / $numberOfInstallments;
		$portions = [];

		while (count($portions) < $numberOfInstallments) {
			$portions[] = $this->convertNumberToMoney($portion);
		}

		return $portions;
	}

	public function add($value) {
		
		if(is_string($value)) {
			$value = $this->convertMoneyToNumber($value);
		}

		$this->init($this->number + $value);
	}

	public function multiply($value) {
		if(is_string($value)) {
			$value = $this->convertMoneyToNumber($value);
		}

		$this->init($this->number * $value);
	}

	public function subtract($value) {
		if(is_string($value)) {
			$value = $this->convertMoneyToNumber($value);
		}

		$this->init($this->number - $value);
	}

	public function divide($value) {
		if(is_string($value)) {
			$value = $this->convertMoneyToNumber($value);
		}

		$this->init($this->number / $value);
	}	

	public function __toString() {
		return $this->money;
	}
}