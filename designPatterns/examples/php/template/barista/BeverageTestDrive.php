<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('./Tea.php');
require_once('./Coffee.php');
require_once('./TeaWithHook.php');
require_once('./CoffeeWithHook.php');


class BeverageTestDrive {
	public static function main() {
 
		$tea = new Tea();
		$coffee = new Coffee();
 
		echo "<p>Making tea...</p>";
		$tea->prepareRecipe();
 
		echo "<p>Making coffee...</p>";
		$coffee->prepareRecipe();

 
		$teaHook = new TeaWithHook();
		$coffeeHook = new CoffeeWithHook();
 
		echo "<p>Making tea...</p>";
		$teaHook->prepareRecipe();
 
		echo "<p>Making coffee...</p>";
		$coffeeHook->prepareRecipe();
	}
}

$example = new BeverageTestDrive();
$example->main();