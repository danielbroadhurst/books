<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("SimplePizzaFactory.php");
require_once("PizzaStore.php");

class PizzaExample {
 
 public function main() {
   $factory = new SimplePizzaFactory();

   $store = new PizzaStore($factory);

   $pizza = $store->orderPizza("cheese");
   $string = "We ordered a " . $pizza->getName() . "\n";
   $string .= $pizza->toString();

   $pizza = $store->orderPizza("veggie");
   $string .= "We ordered a " . $pizza->getName() . "\n";
   $string .= $pizza->toString();
 }
}

$pizzaExample = new PizzaExample();
$pizzaExample->main();