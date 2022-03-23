<?php

require_once("Menu.php");
require_once("MenuItem.php");

class PancakeHouseMenu implements Menu {
	private $menuItems;

	public function __construct() {
		$this->menuItems = new ArrayIterator();
		$this->addItem("K&B's Pancake Breakfast", 
			"Pancakes with scrambled eggs and toast", 
			true,
			2.99);
 
		$this->addItem("Regular Pancake Breakfast", 
			"Pancakes with fried eggs, sausage", 
			false,
			2.99);
 
		$this->addItem("Blueberry Pancakes",
			"Pancakes made with fresh blueberries and blueberry syrup",
			true,
			3.49);
 
		$this->addItem("Waffles",
			"Waffles with your choice of blueberries or strawberries",
			true,
			3.59);
	}

	public function addItem(String $name, String $description,
	                    bool $vegetarian, float $price)
	{
	 	$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->menuItems->append($menuItem);
	}
 
	public function getMenuItems() {
		return $this->menuItems;
	}
  
	public function createIterator() {
		$iterator = new ArrayIterator();
		foreach ($this->menuItems as $value) {
			$iterator->append($value);
		}
		return $iterator;
	}
  
	// other menu methods here
}
