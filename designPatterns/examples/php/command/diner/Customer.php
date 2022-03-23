<?php

require_once('./Waitress.php');
require_once('./Order.php');

class Customer {
	private $waitress;
	private $order;

	public function __construct(Waitress $waitress) {
		$this->waitress = $waitress;
	}

	public function createOrder(Order $order) {
		$this->order = $order;
	}
	public function hungry() {
		$this->waitress->takeOrder($this->order);
	}
}