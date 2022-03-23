<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("NYPizzaStore.php");
require_once("ChicagoPizzaStore.php");

class PizzaFactoryMethodExample {
 
	public function main() {
		$nyStore = new NYPizzaStore();
		$chicagoStore = new ChicagoPizzaStore();
 
		$pizza = $nyStore->orderPizza("cheese");
		echo "<p>Ethan ordered a " . $pizza->getName() . "\n";
 
		$pizza = $chicagoStore->orderPizza("cheese");
		echo "<p>Joel ordered a " . $pizza->getName() . "\n";

		$pizza = $nyStore->orderPizza("clam");
		echo "<p>Ethan ordered a " . $pizza->getName() . "\n";
 
		$pizza = $chicagoStore->orderPizza("clam");
		echo "<p>Joel ordered a " . $pizza->getName() . "\n";

		$pizza = $nyStore->orderPizza("pepperoni");
		echo "<p>Ethan ordered a " . $pizza->getName() . "\n";
 
		$pizza = $chicagoStore->orderPizza("pepperoni");
		echo "<p>Joel ordered a " . $pizza->getName() . "\n";

		$pizza = $nyStore->orderPizza("veggie");
		echo "<p>Ethan ordered a " . $pizza->getName() . "\n";
 
		$pizza = $chicagoStore->orderPizza("veggie");
		echo "<p>Joel ordered a " . $pizza->getName() . "\n";
	}
}

$example = new  PizzaFactoryMethodExample();
$example->main();