<?php

require_once("Pizza.php");

class ClamPizza extends Pizza {
	private $ingredientFactory;

	public function __construct(PizzaIngredientFactory $ingredientFactory) {
		$this->ingredientFactory = $ingredientFactory;
	}
 
	public function prepare() {
		echo "<p>Preparing" . $this->name . "</p>";
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
		$this->clam = $this->ingredientFactory->createClam();
	}
}
