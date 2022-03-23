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
    echo "<p>Preparing " . $this->name . "</p>";
  }

  public function bake()
  {
    echo "<p>Baking " . $this->name . "</p>";
  }

  public function cut()
  {
    echo "<p>Cutting " . $this->name . "</p>";
  }

  public function box()
  {
    echo "<p>Boxing " . $this->name . "</p>";
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
