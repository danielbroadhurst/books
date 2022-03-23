<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('./MallardDuck.php');
include_once('./ModelDuck.php');
include_once('./FlyRocketPowered.php');

class MiniDuckSimulator
{
  public function main()
  {
    $mallard = new MallardDuck();
    $mallard->display();
    $mallard->performQuack();
    $mallard->performFly();

    $model = new ModelDuck();
    $model->display();
    $model->performQuack();
    $model->performFly();
    $model->setFlyBehaviour(new FlyRocketPowered());
    $model->performFly();
  }
}

$example = new MiniDuckSimulator();
$example->main();