<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar besar Kecil</title>

</head>

<body>
       <?php
       function tukar_besar_kecil($string){
       //kode di sini
       $string2 = '';
       for ($i = 0; $i < strlen($string); $i++) {
              if ($string[$i]===strtoupper($string[$i])) {
                     $string2[$i] = strtolower($string[$i]);
              }
              elseif ($string[$i] === strtolower($string[$i])) {
                     $string2[$i] = strtoupper($string[$i]);
              }
       }
       echo $string2, "<br>";
       }

       // TEST CASES
       echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
       echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
       echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
       echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
       echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

       ?>
</body>

</html>