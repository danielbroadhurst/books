<?php

class ChocolateBolier
{
  private $empty;
  private $boiled;
  private static $uniqueInstance;

  private function __construct() {
    $this->empty = true;
    $this->boiled = false;
  }

  public static function getInstance() {
    if (self::$uniqueInstance == null) {
      echo "<p>Creating unique instance of Chocolate Boiler</p>";
      self::$uniqueInstance = new ChocolateBolier();
    }
    echo "<p>Returning instance of Chocolate Boiler</p>";
    return self::$uniqueInstance;
  }

  public function fill()
  {
    if ($this->isEmpty()) {
      $this->empty = false;
      $this->boiled = false;
    }
  }

  public function drain()
  {
    if (!$this->isEmpty() && $this->isBoiled()) {
      $this->empty = true;
    }
  }

  public function boil()
  {
    if (!$this->isEmpty() && !$this->isBoiled()) {
      $this->boiled = true;
    }
  }

  public function isEmpty() {
		return $this->empty;
	}
 
	public function isBoiled() {
		return $this->boiled;
	}
}
