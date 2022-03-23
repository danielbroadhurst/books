<?php 

require_once("Subject.php");

class SimpleSubject implements Subject
{
  private $observers;

  public function __construct() {
    $this->observers = [];
  }
  public function registerObserver(Observer $o)
  {
    array_push($this->observers, $o);
  }
  public function removeObserver(Observer $o)
  {
    array_splice($this->observers, array_search($o, $this->observers), 1);
  }
  public function notifyObservers()
  {
    foreach ($this->observers as $observer) {
      $observer->update($this->value);
   }
  }
  public function setValue(int $value)
  {
    $this->value = $value;
    $this->notifyObservers();
  }
}
