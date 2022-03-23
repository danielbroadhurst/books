<?php

class MuteQuack implements QuackBehaviour
{
  public function quack()
  {
    echo "<p><< Silence >></p>";
  }
}
