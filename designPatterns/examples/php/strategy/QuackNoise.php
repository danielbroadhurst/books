<?php

include_once('./QuackBehaviour.php');

class QuackNoise implements QuackBehaviour
{
  public function quack()
  {
    echo "<p>Quack</p>";
  }
}
