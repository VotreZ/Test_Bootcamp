<?php
$value1 = 1900;
$value2 = 2020;
echo "tahun start : " . $value1;
echo "<br>tahun akhir : " . $value2 . "<br><br>";
foreach (range($value1, $value2) as $tahun) {
    if ($tahun % 4 == 0 && 0 != $tahun % 100 || 0 == $tahun % 400) {
        echo $tahun . "<br>";
    }
}
