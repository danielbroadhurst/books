<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("PancakeHouseMenu.php");
require_once("DinerMenu.php");
require_once("CafeMenu.php");
require_once("Waitress.php");

class MenuTestDrive {
	public static function main() {
		$pancakeHouseMenu = new PancakeHouseMenu();
		$dinerMenu = new DinerMenu();
		$cafeMenu = new CafeMenu();

		$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);
 
		$waitress->printMenu();
		$waitress->printVegetarianMenu();

		echo "<p>Customer asks, is the Hotdog vegetarian?</p>";
		echo "<p>Waitress says: </p>";
		if ($waitress->isItemVegetarian("Hotdog")) {
			echo "<p>Yes</p>";
		} else {
			echo "<p>No</p>";
		}
		echo "<p>Customer asks, are the Waffles vegetarian?</p>";
		echo "<p>Waitress says: </p>";
		if ($waitress->isItemVegetarian("Waffles")) {
			echo "<p>Yes</p>";
		} else {
			echo "<p>No</p>";
		}
	}
}


$example = new MenuTestDrive();
$example->main();