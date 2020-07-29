<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Aritmatika</title>

</head>

<body>
       <?php
              function tentukan_deret_aritmatika($arr) {
                     // kode di sini
                     $diff = $arr[1]-$arr[0];
                     $par = 0;
                     for ($i = 0; $i < count($arr)-1;$i++) {
                            if ($arr[$i+1] - $arr[$i] === $diff) {
                                   $par++;
                            }
                     }
                     if ($par === count($arr) - 1)  {
                            echo "true <br>";
                     }
                     else {
                            echo "false <br>";
                     }
              }
                     
              // TEST CASES
              echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
              echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
              echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
              echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
              echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
       ?>
</body>

</html>