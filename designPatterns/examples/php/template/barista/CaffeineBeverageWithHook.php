<?php

abstract class CaffeineBeverageWithHook {
 
	final function prepareRecipe() {
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		if ($this->customerWantsCondiments()) {
			$this->addCondiments();
		}
	}
 
	abstract function brew();
 
	abstract function addCondiments();
 
	function boilWater() {
		echo "<p>Boiling water</p>";
	}
 
	function pourInCup() {
		echo "<p>Pouring into cup</p>";
	}
 
	function customerWantsCondiments() {
		return true;
	}
}
