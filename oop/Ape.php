<!DOCTYPE html>
<html>
<body>

<?php
include 'frog.php';
class Ape extends Frog {
  public function setLegs() {
    echo $this->legs2;
  }
  public function yell() {
    echo "<br> Auooo <br>";
  }
}
?>
 
</body>
</html>