<?php

require_once("CondimentDecorator.php");

class Soy extends CondimentDecorator {
  public function __construct($beverage) {
		$this->beverage = $beverage;
	}

	public function getDescription() {
    return $this->beverage->getDescription() . ", Soy";
	}

	public function cost() {
		return .15 + $this->beverage->cost();
	}
}