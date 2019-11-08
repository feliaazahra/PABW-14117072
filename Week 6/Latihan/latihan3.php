<?php

$nama = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];

echo "Data acak: ";
for($i=0;$i<7;$i++){
    echo $nama[$i];
    echo ", ";
}

echo "<br>";

sort($nama);
echo "Data terurut: ";
for($i=0;$i<7;$i++){
    echo $nama[$i];
    echo ", ";
}