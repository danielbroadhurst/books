<?php

class Waitress {
	public $order;

	public function __construct() {}

	public function takeOrder(Order $order) {
		$this->order = $order; 
		$order->orderUp();
	}
}