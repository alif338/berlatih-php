<!DOCTYPE html>
<html>
<body>

<?php

class Animal {
  // Properties
  public $name;
  public $legs = 2;
  protected $legs2 = 4;

  // Methods
  function __construct($name) {
    $this->name = "$name <br>";
  } 
  public $cold_blooded = '<br>false ';
}
?>
 
</body>
</html>
