<?php
  
class Waitress {
	private $menus;
     
  public function __construct($menus) {
		$this->menus = $menus;
	}
   
	public function printMenu() {
		foreach ($this->menus as $menu) {
			$this->printMenuIt($menu->createIterator());
		}
	}
   
	public function printMenuIt($iterator) {
		while ($iterator->valid()) {
			$menuItem = $iterator->current();
			echo "<p>" . $menuItem->getName() . ", </p>";
			echo "<p>" . $menuItem->getPrice() . " -- ";
			echo $menuItem->getDescription() . "</p>";
			$iterator->next();
		}
	}
}  
