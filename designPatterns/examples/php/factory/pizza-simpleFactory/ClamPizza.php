<?php

require_once("Pizza.php");

class ClamPizza extends Pizza
{
  public function __construct()
  {
    $this->name = "Clam Pizza";
    $this->dough = "Thin Crust";
    $this->sauce = "White garlic sauce";
    array_push($this->toppings, "Clams");
    array_push($this->toppings, "Grated parmesan cheese");
  }
}
