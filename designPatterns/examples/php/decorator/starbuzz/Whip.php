<?php

require_once("CondimentDecorator.php");

class Whip extends CondimentDecorator {
  public function __construct($beverage) {
		$this->beverage = $beverage;
	}

	public function getDescription() {
		return $this->beverage->getDescription() . ", Whip";
	}

	public function cost() {
		return .10 + $this->beverage->cost();
	}
}