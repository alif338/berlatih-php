<!DOCTYPE html>
<html>
<body>

<?php
include 'animal.php';
class Frog extends Animal {
  public function setLegs() {
    echo $this->legs2;
  }
  
  public function jump() {
    echo "hop hop <br>";
  }
}
?>
 
</body>
</html>