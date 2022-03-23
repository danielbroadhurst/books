<?php

abstract class Duck
{
  public $flyBehaviour;
  public $quackBehaviour;

  public function setFlyBehaviour($fb)
  {
    $this->flyBehaviour = $fb;
  }
  public function setQuackBehaviour($qb)
  {
    $this->quackBehaviour = $qb;
  }

  abstract function display();

  public function performFly()
  {
    $this->flyBehaviour->fly();
  }
  public function performQuack()
  {
    $this->quackBehaviour->quack();
  }
  public function swim()
  {
    echo "All ducks float, even decoys!";
  }
}
