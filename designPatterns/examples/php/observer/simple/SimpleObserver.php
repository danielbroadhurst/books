<?php 

require_once("Observer.php");

class SimpleObserver implements Observer
{  
  private $value;
	private $simpleSubject;
  private $name;

  public function __construct(Subject $simpleSubject, String $name) {
    $this->simpleSubject = $simpleSubject;
    $this->name = $name;
    $simpleSubject->registerObserver($this);
  }
  public function update(int $value)
  {
    $this->value = $value;
    $this->display();
  }
  public function display()
  {
    echo "<p>Value: $this->name $this->value </p>";
  }
}
