<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skor Terbesar</title>

</head>

<body>
       <?php
       function skor_terbesar($arr){
              //kode di sini
              }
              
              // TEST CASES
              $skor = [
                [
                  "nama" => "Bobby",
                  "kelas" => "Laravel",
                  "nilai" => 78
                ],
                [
                  "nama" => "Regi",
                  "kelas" => "React Native",
                  "nilai" => 86
                ],
                [
                  "nama" => "Aghnat",
                  "kelas" => "Laravel",
                  "nilai" => 90
                ],
                [
                  "nama" => "Indra",
                  "kelas" => "React JS",
                  "nilai" => 85
                ],
                [
                  "nama" => "Yoga",
                  "kelas" => "React Native",
                  "nilai" => 77
                ],
              ];
              
              print_r(skor_terbesar($skor));
              /* OUTPUT
                Array (
                  [Laravel] => Array
                            (
                              [nama] => Aghnat
                              [kelas] => Laravel
                              [nilai] => 90
                            )
                  [React Native] => Array
                                (
                                  [nama] => Regi
                                  [kelas] => React Native
                                  [nilai] => 86
                                )
                  [React JS] => Array
                              (
                                [nama] => Indra
                                [kelas] => React JS
                                [nilai] => 85
                              )
                )
              */
       ?>
</body>

</html>