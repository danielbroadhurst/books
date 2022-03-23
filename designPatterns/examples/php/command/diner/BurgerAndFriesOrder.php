<?php

require_once('./Order.php');

class BurgerAndFriesOrder implements Order {
	private $cook;

	public function __construct(Cook $cook) {
		$this->cook = $cook;
	}

	public function orderUp() {
		$this->cook->makeBurger();
		$this->cook->makeFries();
	}
}
