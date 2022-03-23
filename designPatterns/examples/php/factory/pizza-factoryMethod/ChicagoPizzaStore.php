<?php

require_once("PizzaStore.php");
require_once("ChicagoStyleCheesePizza.php");
require_once("ChicagoStyleVeggiePizza.php");
require_once("ChicagoStyleClamPizza.php");
require_once("ChicagoStylePepperoniPizza.php");

class ChicagoPizzaStore extends PizzaStore {

	public function createPizza(String $item) {
		if ($item === "cheese") {
			return new ChicagoStyleCheesePizza();
		} else if ($item === "veggie") {
			return new ChicagoStyleVeggiePizza();
		} else if ($item === "clam") {
			return new ChicagoStyleClamPizza();
		} else if ($item === "pepperoni") {
			return new ChicagoStylePepperoniPizza();
		} else return null;
	}
}
