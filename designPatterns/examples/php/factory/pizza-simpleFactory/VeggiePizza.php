<?php

require_once("Pizza.php");

class VeggiePizza extends Pizza
{
  public function __construct()
  {
    $this->name = "Veggie Pizza";
    $this->dough = "Crust";
    $this->sauce = "Marinara sauce";
    array_push($this->toppings, "Shredded mozzarella");
    array_push($this->toppings, "Grated parmesan cheese");
    array_push($this->toppings, "Diced onion");
    array_push($this->toppings, "Sliced mushrooms");
    array_push($this->toppings, "Sliced red pepper");
    array_push($this->toppings, "Sliced black olives");
  }
}