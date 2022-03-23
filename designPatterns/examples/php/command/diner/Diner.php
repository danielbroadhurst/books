<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./Cook.php');
require_once('./Waitress.php');
require_once('./Customer.php');
require_once('./BurgerAndFriesOrder.php');

class Diner {
	public static function main() {
		$cook = new Cook();
		$waitress = new Waitress();
		$customer = new Customer($waitress);
		$customer->createOrder(new BurgerAndFriesOrder($cook));
		$customer->hungry();
	}
}

$example = new Diner();
$example->main();