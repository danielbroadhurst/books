<?php

require_once('./CaffeineBeverage.php');

class Coffee extends CaffeineBeverage {
	public function brew() {
		echo "<p>Dripping Coffee through filter</p>";
	}
	public function addCondiments() {
		echo "<p>Adding Sugar and Milk</p>";
	}
}
