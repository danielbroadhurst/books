<?php

require_once("Pizza.php");

class ChicagoStyleClamPizza extends Pizza {

	public function __construct() {
		$this->name = "Chicago Style Clam Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
 
		array_push($this->toppings, "Shredded Mozzarella Cheese");
		array_push($this->toppings, "Frozen Clams from Chesapeake Bay");
	}

	public function cut() {
		echo "<p>Cutting the pizza into square slices</p>";
	}
		
}