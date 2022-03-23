<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once("./Duck.php");
require_once("./TurkeyAdapter.php");
require_once("./MallardDuck.php");
require_once("./WildTurkey.php");
require_once("./SuperDrone.php");
require_once("./DroneAdapter.php");

class DuckTestDrive {
	public static function main() {
		$duck = new MallardDuck();

		$turkey = new WildTurkey();
		$turkeyAdapter = new TurkeyAdapter($turkey);

		echo "<p>The Turkey says...</p>";
		$turkey->gobble();
		$turkey->fly();

		echo "<p>The Duck says...</p>";
		self::testDuck($duck);

		echo "<p>The TurkeyAdapter says...</p>";
		self::testDuck($turkeyAdapter);
		
		// Challenge
		$drone = new SuperDrone();
		$droneAdapter = new DroneAdapter($drone);
		self::testDuck($droneAdapter);
	}

	static function testDuck(Duck $duck) {
		$duck->quack();
		$duck->fly();
	}
}


$example = new DuckTestDrive();
$example->main();