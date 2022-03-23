<?php

abstract class CaffeineBeverage {
  
	final function prepareRecipe() {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		$this->addCondiments();
	}
 
	abstract function brew();
  
	abstract function addCondiments();
 
	function boilWater() {
		echo "<p>Boiling water</p>";
	}
  
	function pourInCup() {
		echo "<p>Pouring into cup</p>";
	}
}
