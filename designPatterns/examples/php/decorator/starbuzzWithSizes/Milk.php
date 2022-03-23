<?php

require_once("CondimentDecorator.php");

class Milk extends CondimentDecorator {
  public function __construct($beverage) {
		$this->beverage = $beverage;
	}

	public function getDescription() {
		return $this->beverage->getDescription() . ", Milk";
	}

	public function cost() {
		return .10 + $this->beverage->cost();
	}
}