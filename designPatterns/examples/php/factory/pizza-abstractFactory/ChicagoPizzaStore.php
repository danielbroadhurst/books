<?php

require_once("PizzaStore.php");
require_once("ChicagoPizzaIngredientFactory.php");
require_once("CheesePizza.php");
require_once("VeggiePizza.php");
require_once("ClamPizza.php");
require_once("PepperoniPizza.php");

class ChicagoPizzaStore extends PizzaStore {

	public function __construct() {}

	public function createPizza(String $item)
	{
		$pizza = null;
		$ingredientFactory =
			new ChicagoPizzaIngredientFactory();

		if ($item ===("cheese")) {

			$pizza = new CheesePizza($ingredientFactory);
			$pizza->setName("Chicago Style Cheese Pizza");
		} else if ($item ===("veggie")) {

			$pizza = new VeggiePizza($ingredientFactory);
			$pizza->setName("Chicago Style Veggie Pizza");
		} else if ($item ===("clam")) {

			$pizza = new ClamPizza($ingredientFactory);
			$pizza->setName("Chicago Style Clam Pizza");
		} else if ($item ===("pepperoni")) {

			$pizza = new PepperoniPizza($ingredientFactory);
			$pizza->setName("Chicago Style Pepperoni Pizza");
		}
		return $pizza;
	}
}
