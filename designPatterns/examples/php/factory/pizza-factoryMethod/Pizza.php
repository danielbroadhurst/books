<?php

abstract class Pizza  
{
  public $name;
  public $dough;
  public $sauce;
  public $toppings = array();

  public function getName()
  {
    return $this->name;
  }

  public function prepare()
  {
		$string = "Prepare " . $this->name;
    $string .= "Tossing dough...\n";
    $string .= "Adding sauce...\n";
		$string .= "Adding toppings: \n";
    foreach ($this->toppings as $topping) {
      $string .= " " . $topping . "\n";
    }
    echo $string;
  }

  public function bake()
  {
    echo "<p>Bake for 25 minutes at 350</p>";
  }

  public function cut()
  {
    echo "<p>Cut the pizza into diagonal slices</p>";
  }

  public function box()
  {
    echo "<p>Place pizza in official PizzaStore box</p>";
  }

  public function toString()
  {
    $string = "----" . $this->name . "----\n";
    $string .= $this->dough . "\n";
    $string .= $this->sauce . "\n";
    foreach ($this->toppings as $topping) {
      $string .= $topping . "\n";
    }
    echo $string;
  }
}

