<?php

require_once("Pizza.php");

class CheesePizza extends Pizza
{
  public function __construct()
  {
    $this->name = "Cheese Pizza";
    $this->dough = "Regular Crust";
    $this->sauce = "Marinara Pizza Sauce";
    array_push($this->toppings, "Fresh Mozzarella");
    array_push($this->toppings, "Parmesan");
  }
}
