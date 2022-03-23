<?php

include_once('./FlyBehaviour.php');

class FlyWithWings implements FlyBehaviour
{
  public function fly()
  {
    echo "<p>I'm flying!!</p>";
  }
}
