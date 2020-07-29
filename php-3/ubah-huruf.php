<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>

</head>

<body>
       <?php
              function ubah_huruf($string){
                     //kode di sini
                     $alpha = "zabcdefghijklmnopqrstuvwxyz";
                     for ($i = 0; $i < strlen($string); $i++) {
                            for ($j = 1; $j < strlen($alpha)-1; $j++) {
                                   if ($string[$i] === $alpha[$j]) {
                                          $string[$i] = $alpha[$j - 1];
                                   }
                            }

                     }
                     echo $string, "<br>";
                     }
                     
                     // TEST CASES
                     echo ubah_huruf('wow'); // xpx
                     echo ubah_huruf('developer'); // efwfmpqfs
                     echo ubah_huruf('laravel'); // mbsbwfm
                     echo ubah_huruf('keren'); // lfsfo
                     echo ubah_huruf('semangat'); // tfnbohbu
                     
       ?>
</body>

</html>