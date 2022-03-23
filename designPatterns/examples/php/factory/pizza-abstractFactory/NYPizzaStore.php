<?php

require_once("PizzaStore.php");
require_once("NYPizzaIngredientFactory.php");
require_once("CheesePizza.php");
require_once("VeggiePizza.php");
require_once("ClamPizza.php");
require_once("PepperoniPizza.php");

class NYPizzaStore extends PizzaStore {

	public function __construct() {}
 
	public function createPizza(String $item) {
		$pizza = null;
		$ingredientFactory = 
			new NYPizzaIngredientFactory();
 
		if ($item === ("cheese")) {
  
			$pizza = new CheesePizza($ingredientFactory);
			$pizza->setName("New York Style Cheese Pizza");
  
		} else if ($item === ("veggie")) {
 
			$pizza = new VeggiePizza($ingredientFactory);
			$pizza->setName("New York Style Veggie Pizza");
 
		} else if ($item === ("clam")) {
 
			$pizza = new ClamPizza($ingredientFactory);
			$pizza->setName("New York Style Clam Pizza");
 
		} else if ($item === ("pepperoni")) {

			$pizza = new PepperoniPizza($ingredientFactory);
			$pizza->setName("New York Style Pepperoni Pizza");
 
		} 
		return $pizza;
	}
}
