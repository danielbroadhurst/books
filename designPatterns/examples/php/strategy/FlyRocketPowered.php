<?php

include_once('./FlyBehaviour.php');

class FlyRocketPowered implements FlyBehaviour
{
  public function fly()
  {
    echo "<p>I'm flying with a Rocket!!</p>";
  }
}
