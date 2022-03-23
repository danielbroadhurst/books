<?php

include_once('./Duck.php');
include_once('./QuackNoise.php');
include_once('./FlyWithWings.php');

class MallardDuck extends Duck
{
  public function __construct() {
    $this->flyBehaviour = new FlyWithWings();
    $this->quackBehaviour = new QuackNoise();
  }

  public function display()
  {
    echo "<p>I'm a real Mallard duck</p>";
  }
}
