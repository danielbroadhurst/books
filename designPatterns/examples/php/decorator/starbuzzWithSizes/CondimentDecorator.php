<?php

require_once("Beverage.php");

abstract class CondimentDecorator extends Beverage {
  public $beverage;
}
