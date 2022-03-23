<?php

class Waitress {
	private $pancakeHouseMenu;
	private $dinerMenu;
	private $cafeMenu;
 
	public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu, Menu $cafeMenu) {
		$this->pancakeHouseMenu = $pancakeHouseMenu;
		$this->dinerMenu = $dinerMenu;
		$this->cafeMenu = $cafeMenu;
	}
 
	public function printMenu() {
		$pancakeIterator = $this->pancakeHouseMenu->createIterator();
		$dinerIterator = $this->dinerMenu->createIterator();
		$cafeIterator = $this->cafeMenu->createIterator();

		echo "<p>MENU----BREAKFAST</p>";
		$this->printMenuIt($pancakeIterator);
		echo "<p>LUNCH</p>";
		$this->printMenuIt($dinerIterator);
		echo "<p>DINNER</p>";
		$this->printMenuIt($cafeIterator);
	}
 
	private function printMenuIt(Iterator $iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
			echo "<p>" . $menuItem->getName() . ", </p>";
			echo "<p>" . $menuItem->getPrice() . " -- ";
			echo $menuItem->getDescription() . "</p>";
			$iterator->next();
		}
	}
 
	public function printVegetarianMenu() {
		echo "<p>VEGETARIAN MENU---------------</p>";
		$this->printVegetarianMenuIt($this->pancakeHouseMenu->createIterator());
		$this->printVegetarianMenuIt($this->dinerMenu->createIterator());
		$this->printVegetarianMenuIt($this->cafeMenu->createIterator());
	}
 
	public function isItemVegetarian(String $name) {
		$pancakeIterator = $this->pancakeHouseMenu->createIterator();
		if ($this->isVegetarian($name, $pancakeIterator)) {
			return true;
		}
		$dinerIterator = $this->dinerMenu->createIterator();
		if ($this->isVegetarian($name, $dinerIterator)) {
			return true;
		}
		$cafeIterator = $this->cafeMenu->createIterator();
		if ($this->isVegetarian($name, $cafeIterator)) {
			return true;
		}
		return false;
	}


	private function printVegetarianMenuIt(Iterator $iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
			if ($menuItem->isVegetarian()) {
				echo "<p>" . $menuItem->getName() . ", </p>";
				echo "<p>" . $menuItem->getPrice() . " -- ";
				echo $menuItem->getDescription() . "</p>";
			}
			$iterator->next();
		}
	}

	private function isVegetarian(String $name, Iterator $iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
			if ($menuItem->getName() === $name) {
				if ($menuItem->isVegetarian()) {
					return true;
				}
			}
			$iterator->next();
		}
		return false;
	}
}

