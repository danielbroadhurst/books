<?php

require_once("Pizza.php");

class ChicagoStyleVeggiePizza extends Pizza {

	public function __construct() {
		$this->name = "Chicago Deep Dish Veggie Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
 
		array_push($this->toppings, "Shredded Mozzarella Cheese");
		array_push($this->toppings, "Black Olives");
		array_push($this->toppings, "Spinach");
		array_push($this->toppings, "Eggplant");
	}

	public function cut() {
		echo "<p>Cutting the pizza into square slices</p>";
	}
		
}