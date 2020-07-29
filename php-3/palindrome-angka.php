<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Angka</title>

</head>

<body>
       <?php

       function palindrome_angka($angka) {
              if ($angka < 10) {
                     if ($angka ===9) {
                            echo 11 , "<br>";
                     }
                     else {
                            echo $angka + 1 , "<br>";
                     }
              }
              else{   
                     $bool = True;
                     while ($bool === True) {
                            if (strlen("$angka")%2 === 0) {
                                   $num = "$angka";
                                   $par = 0;
                                   for ($i = 0; $i < strlen($num)/2; $i++) {
                                          if ($num[$i] === $num[strlen($num) - 1 - $i]) {
                                                 $par++;
                                          }

                                   }
                                   if ($par === strlen($num)/2) {
                                          $bool = False;
                                   }
                                   else {
                                          $angka++;
                                   }
                            }

                            else {
                                   $num = "$angka";
                                   $par = 0;
                                   for ($i = 0; $i < (strlen($num)-1)/2; $i++) {
                                          if ($num[$i] === $num[strlen($num) - 1 - $i]) {
                                                 $par++;
                                          }

                                   }
                                   if ($par === (strlen($num)-1)/2) {
                                          $bool = False;
                                   }
                                   else {
                                          $angka++;
                                   }
                            }
                     }
                     echo $angka, "<br>";
              }
       }
      
       // TEST CASES
       echo palindrome_angka(8); // 9
       echo palindrome_angka(10); // 11
       echo palindrome_angka(117); // 121
       echo palindrome_angka(175); // 181
       echo palindrome_angka(1000); // 1001

       ?>
</body>

</html>