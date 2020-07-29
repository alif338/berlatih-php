<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasangan Terbesar</title>

</head>

<body>
       <?php
              function pasangan_terbesar($angka){
                     // kode di sini
                     $num = "$angka";
                     $set = [];
                     for ($i = 0; $i < strlen($num)-1;$i++) {
                            $set[$i] = number_format(substr($num,$i,2));
                     }
                     echo max($set), "<br>";
              }

              // TEST CASES
              echo pasangan_terbesar(641573); // 73
              echo pasangan_terbesar(12783456); // 83
              echo pasangan_terbesar(910233); // 91
              echo pasangan_terbesar(71856421); // 85
              echo pasangan_terbesar(79918293); // 99

       ?>
</body>

</html>