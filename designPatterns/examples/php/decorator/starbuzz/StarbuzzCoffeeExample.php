<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("Espresso.php");
require_once("DarkRoast.php");
require_once("HouseBlend.php");
require_once("Mocha.php");
require_once("Whip.php");
require_once("Soy.php");

class StarbuzzCoffeeExample
{

	public function main()
	{
		$beverage = new Espresso();
		echo "<p>" . $beverage->getDescription() . " " . $beverage->cost() . "</p>";

		$beverage2 = new DarkRoast();
		$beverage2 = new Mocha($beverage2);
		$beverage2 = new Mocha($beverage2);
		$beverage2 = new Whip($beverage2);
		echo "<p>" . $beverage2->getDescription() . " " . $beverage2->cost() . "</p>";

		$beverage3 = new HouseBlend();
		$beverage3 = new Soy($beverage3);
		$beverage3 = new Mocha($beverage3);
		$beverage3 = new Whip($beverage3);
		echo "<p>" . $beverage3->getDescription() . " " . $beverage3->cost() . "</p>";
	}
}

$app = new StarbuzzCoffeeExample();
$app->main();
