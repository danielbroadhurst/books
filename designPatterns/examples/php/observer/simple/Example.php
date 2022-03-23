<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("SimpleObserver.php");
require_once("SimpleSubject.php");

class Example {
  
  public function main(int $args)
  {
    $simpleSubject = new SimpleSubject();

    $simpleObserver = new SimpleObserver($simpleSubject, 'Observer1');
    $simpleObserver2 = new SimpleObserver($simpleSubject, 'Observer2');

    $simpleSubject->setValue($args);

    $simpleSubject->removeObserver($simpleObserver2);

    $simpleSubject->setValue($args + 100);

    $simpleSubject->removeObserver($simpleObserver);
    echo "No observers registered";
    $simpleSubject->setValue($args + 300);
  }
}

$example = new Example();
$example->main(10);

