<?php

abstract class PizzaStore {
 
	abstract function createPizza(String $item);
 
	public function orderPizza(String $type) {
		$pizza = $this->createPizza($type);
		echo "<p>--- Making a " . $pizza->getName() . " ---</p>";
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}
