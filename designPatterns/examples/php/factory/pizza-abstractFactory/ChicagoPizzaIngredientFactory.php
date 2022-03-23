<?php

require_once("PizzaIngredientFactory.php");
require_once("ThickCrustDough.php");
require_once("PlumTomatoSauce.php");
require_once("MozzarellaCheese.php");
require_once("BlackOlives.php");
require_once("Spinach.php");
require_once("Eggplant.php");
require_once("SlicedPepperoni.php");
require_once("FrozenClams.php");

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

	public function createDough()
	{
		return new ThickCrustDough();
	}

	public function createSauce()
	{
		return new PlumTomatoSauce();
	}

	public function createCheese()
	{
		return new MozzarellaCheese();
	}

	public function createVeggies()
	{
		$veggies = array(
			new BlackOlives(),
			new Spinach(),
			new Eggplant()
		);
		return $veggies;
	}

	public function createPepperoni()
	{
		return new SlicedPepperoni();
	}

	public function createClam()
	{
		return new FrozenClams();
	}
}
