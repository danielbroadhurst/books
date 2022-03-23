<?php

class Coffee {
 
	function prepareRecipe() {
		$this->boilWater();
		$this->brewCoffeeGrinds();
		$this->pourInCup();
		$this->addSugarAndMilk();
	}
 
	public function boilWater() {
		echo "<p>Boiling water</p>";
	}
 
	public function brewCoffeeGrinds() {
		echo "<p>Dripping Coffee through filter</p>";
	}
 
	public function pourInCup() {
		echo "<p>Pouring into cup</p>";
	}
 
	public function addSugarAndMilk() {
		echo "<p>Adding Sugar and Milk</p>";
	}
}
