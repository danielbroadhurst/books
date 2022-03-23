<?php

require_once("Pizza.php");

class NYStyleVeggiePizza extends Pizza {

	public function __construct() {
		$this->name = "NY Style Veggie Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";
 
		array_push($this->toppings, "Grated Reggiano Cheese");
		array_push($this->toppings, "Garlic");
		array_push($this->toppings, "Onion");
		array_push($this->toppings, "Mushrooms");
		array_push($this->toppings, "Red Pepper");
	}
		
}