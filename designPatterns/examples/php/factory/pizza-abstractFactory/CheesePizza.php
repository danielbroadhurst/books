<?php

require_once("Pizza.php");

class CheesePizza extends Pizza {
	private $ingredientFactory;

	public function __construct(PizzaIngredientFactory $ingredientFactory) {
		$this->ingredientFactory = $ingredientFactory;
	}
 
	public function prepare() {
		echo "<p>Preparing" . $this->name . "</p>";
		$dough = $this->ingredientFactory->createDough();
		$sauce = $this->ingredientFactory->createSauce();
		$cheese = $this->ingredientFactory->createCheese();
	}
}
