<?php

require_once("PizzaIngredientFactory.php");
require_once("ThinCrustDough.php");
require_once("MarinaraSauce.php");
require_once("ReggianoCheese.php");
require_once("SlicedPepperoni.php");
require_once("FreshClams.php");
require_once("Garlic.php");
require_once("Onion.php");
require_once("Mushroom.php");
require_once("RedPepper.php");

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
 
	public function createDough() {
		return new ThinCrustDough();
	}
 
	public function createSauce() {
		return new MarinaraSauce();
	}
 
	public function createCheese() {
		return new ReggianoCheese();
	}
 
	public function createVeggies() {
		$veggies = array( new Garlic(), new Onion(), new Mushroom(), new RedPepper() );
		return $veggies;
	}
 
	public function createPepperoni() {
		return new SlicedPepperoni();
	}

	public function createClam() {
		return new FreshClams();
	}
}
