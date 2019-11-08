<?php

$a = 2;
$b = 3;

echo "Bilangan Sebelum Penukaran <br>";
echo "A: $a <br>";
echo "B: $b <br>";

function swap(&$a, &$b){
    $value = $a;
    $a = $b;
    $b = $value;
}

swap($a,$b);
echo "Bilangan Setelah Penukaran <br>";
echo "A: $a <br>";
echo "B: $b";

?>