<?php

class Singleton
{
  private static $uniqueInstance;

  private function __construct() {}

  public static function getInstance()
  {
    if (self::$uniqueInstance == null) {
      self::$uniqueInstance = new Singleton();
    }
    return self::$uniqueInstance;
  }

  public function getDescription() {
		return "I'm a classic Singleton!";
	}
}
