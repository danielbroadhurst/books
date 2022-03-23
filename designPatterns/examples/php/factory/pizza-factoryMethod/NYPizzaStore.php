<?php

require_once("PizzaStore.php");
require_once("NYStyleCheesePizza.php");
require_once("NYStyleVeggiePizza.php");
require_once("NYStyleClamPizza.php");
require_once("NYStylePepperoniPizza.php");

class NYPizzaStore extends PizzaStore {

	public function createPizza(String $item) {
		if ($item === "cheese") {
			return new NYStyleCheesePizza();
		} else if ($item === "veggie") {
			return new NYStyleVeggiePizza();
		} else if ($item === "clam") {
			return new NYStyleClamPizza();
		} else if ($item === "pepperoni") {
			return new NYStylePepperoniPizza();
		} else return null;
	}
}
