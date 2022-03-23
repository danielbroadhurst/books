<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("PancakeHouseMenu.php");
require_once("DinerMenu.php");
require_once("Waitress.php");

class MenuTestDrive {
	public static function main() {
		$pancakeHouseMenu = new PancakeHouseMenu();
		$dinerMenu = new DinerMenu();
		$menus = array();
		array_push($menus, $pancakeHouseMenu);
		array_push($menus, $dinerMenu);
		$waitress = new Waitress($menus);
		$waitress->printMenu();
	}
}

$example = new MenuTestDrive();
$example->main();