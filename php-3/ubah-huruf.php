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
                     $string1 = $string;
                     $alpha = ['z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
                     for ($i = 1; $i < strlen($string)+1; $i++) {
                            for ($j = 1; $j < count($alpha); $j++) {
                                   if ($string[$i-1] === $alpha[$j-1]) {
                                          $string1[$i-1] = $alpha[$j];
                                   }
                            }

                     }
                     echo $string1, "<br>";
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