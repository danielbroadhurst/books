<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./Singleton.php");

class SingletonClient  
{
  public function main()
  {
    $singleton = Singleton::getInstance();
    echo "<p>" .$singleton->getDescription() . "</p>";
  }
}

$example = new SingletonClient();
$example->main();