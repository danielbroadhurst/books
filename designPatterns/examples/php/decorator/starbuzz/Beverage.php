<?php

abstract class Beverage
{
  public $description = "Unknown Beverage";

  public function getDescription()
  {
    return $this->description;
  }

  abstract public function cost();
}
