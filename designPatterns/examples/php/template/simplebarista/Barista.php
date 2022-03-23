<?php

require_once('./Tea.php');
require_once('./Coffee.php');

class Barista {
 
	public static function main() {
		$tea = new Tea();
		$coffee = new Coffee();
		echo "<p>Making tea...</p>";
		$tea->prepareRecipe();
		echo "<p>Making coffee...</p>";
		$coffee->prepareRecipe();
	}
}

$example = new Barista();
$example->main();