<?php

$array = array(15, 1, 3);
echo "[";
foreach ($array as $angka) {
    echo $angka . " ";
}
echo "]<br><br>";

$jmlh = array_sum($array);
// $jmlh = 7;

if ($jmlh == 0) {
    return;
}

$a = 0;
$b = 1;
$c = $a + $b;

while ($c <= $jmlh) {

    $a = $b;

    $b = $c;

    $c = $a + $b;
}
if (abs($c - $jmlh) >= abs($b - $jmlh)) {
    $hasil =  $b;
} else {
    $hasil = $c;
}
echo "angka terdekat dengan fibonaci dari hasil penjumlahan data dalam array : " . $jmlh . "<br>";
echo "<br> yaitu " . $hasil;

// for ($i = 0; $c <= $jmlh; $i++) {
//     echo $c;
//     $a = $b;
//     $b = $c;
//     $c = $a + $b;
//     echo "<br>";
// }
// // $min = minValue($jmlh - $a, $jmlh - $b);
// if ($jmlh - $a > $b - $jmlh) {
//     // min difference of a
//     $jmlh = $a;
//     echo $jmlh;
// } else {
//     // min difference of b
//     $jmlh = $b;
//     echo $jmlh;
// }
