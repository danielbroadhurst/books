<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./MallardDuck.php");
require_once("./DuckAdapter.php");

class TurkeyTestDrive {
	public static function main() {
		$duck = new MallardDuck();
		$duckAdapter = new DuckAdapter($duck);
 
		for($i=0;$i<10;$i++) {
			echo "<p>The DuckAdapter says...</p>";
			$duckAdapter->gobble();
			$duckAdapter->fly();
		}
	}
}

$example = new TurkeyTestDrive();
$example->main();