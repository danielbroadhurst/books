<?php

require_once("Pizza.php");

class PepperoniPizza extends Pizza {
	private $ingredientFactory;

	public function __construct(PizzaIngredientFactory $ingredientFactory) {
		$this->ingredientFactory = $ingredientFactory;
	}
 
	public function prepare() {
		echo "<p>Preparing" . $this->name . "</p>";
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
		$this->veggies = $this->ingredientFactory->createVeggies();
		$this->pepperoni = $this->ingredientFactory->createPepperoni();
	}
}
