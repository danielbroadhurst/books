<?php

abstract class Beverage
{
  public $size = BeverageSizeEnum::TALL;
  public $description = "Unknown Beverage";

  public function getDescription()
  {
    return $this->description;
  }

  public function setSize($size) {
		$this->size = $size;
	}

  public function getSize()
  {
    return $this->size;
  }

  abstract public function cost();
}
