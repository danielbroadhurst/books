<?php 

include_once('./Duck.php');
include_once('./Squeak.php');
include_once('./FlyNoWay.php');

class ModelDuck extends Duck 
{
  
  public function __construct() {
    $this->flyBehaviour = new FlyNoWay();
    $this->quackBehaviour = new Squeak();
  }

  public function display()
  {
    echo "<p>I'm a Model duck</p>";
  }
}
