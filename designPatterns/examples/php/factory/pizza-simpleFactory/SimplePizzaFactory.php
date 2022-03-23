<?php

require_once("CheesePizza.php");
require_once("PepperoniPizza.php");
require_once("ClamPizza.php");
require_once("VeggiePizza.php");

class SimplePizzaFactory
{

  public function createPizza(String $type): Pizza
  {
    $pizza = null;

    if ($type ===  "cheese") {
      $pizza = new CheesePizza();
    } else if ($type === "pepperoni") {
      $pizza = new PepperoniPizza();
    } else if ($type === "clam") {
      $pizza = new ClamPizza();
    } else if ($type === "veggie") {
      $pizza = new VeggiePizza();
    }
    return $pizza;
  }
}
