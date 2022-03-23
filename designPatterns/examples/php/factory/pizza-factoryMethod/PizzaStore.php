<?php

abstract class PizzaStore {
 
	abstract function createPizza(String $item);
 
	public function orderPizza(String $type) {
		$pizza = $this->createPizza($type);
		echo "--- Making a " . $pizza->getName() . " ---";
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
