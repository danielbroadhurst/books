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
		$cost = $this->beverage->cost();
		if ($this->beverage->getSize() == BeverageSizeEnum::TALL) {
			$cost += .10;
		} else if ($this->beverage->getSize() == BeverageSizeEnum::GRANDE) {
			$cost += .15;
		} else if ($this->beverage->getSize() == BeverageSizeEnum::VENTI) {
			$cost += .20;
		}
		return $cost;
	}
}