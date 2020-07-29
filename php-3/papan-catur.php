<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>

</head>

<body>
<?php

function papan_catur($angka) {
       $n =0;
       if ($angka%2==0) {
              $p = $angka/2;
              for ($i = 0; $i < $p;$i++) {
                     echo str_repeat("# ", $angka),"<br>";
                     echo str_repeat(" #", $angka-1),"<br>";
              }

       }
       else {
              $p = ($angka + 1)/2;
              for ($i = 0; $i < $p;$i++) {
                     echo str_repeat("#  ", $angka), "<br>";
                     $n++;
                     if ($n == $angka) {
                     break;
                     }
                     echo str_repeat("#  ", $angka-1), " <br>";
                     $n++;
              }
       }
       
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

//echo papan_catur(8);

# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>

</html>