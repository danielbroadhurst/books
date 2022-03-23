<?php

require_once('./CaffeineBeverage.php');

class Tea extends CaffeineBeverage {
	public function brew() {
		echo "<p>Steeping the tea</p>";
	}
	public function addCondiments() {
		echo "<p>Adding Lemon</p>";
	}
}
