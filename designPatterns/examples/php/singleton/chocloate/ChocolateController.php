<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./ChocolateBolier.php");

class ChocolateController  
{
  public function main()
  {
    $boiler = ChocolateBolier::getInstance();
    $boiler->fill();
		$boiler->boil();
		$boiler->drain();

    $boiler2 = ChocolateBolier::getInstance();
  }
}

$example = new ChocolateController();
$example->main();