<?php

require_once("Pizza.php");

class PepperoniPizza extends Pizza
{
  public function __construct()
  {
    $this->name = "Pepperoni Pizza";
    $this->dough = "Crust";
    $this->sauce = "Marinara sauce";
    array_push($this->toppings, "Sliced Pepperoni");
    array_push($this->toppings, "Sliced Onion");
    array_push($this->toppings, "Grated parmesan cheese");
  }
}