<?php

function bar($color="Merah"){
    echo "Warna: $color";
}


function harga($jml){
    if($jml<=10){
        $hrg = $jml*300;
    } else if($jml<21){
        $hrg = $jml*500;
    }else{
        $hrg = $jml*700;
    }
    echo "Total Harga: $hrg";
}

$nama = "Felia Azahra";
$jml = strlen($nama);
$warna = "Ungu";


echo "Nama: $nama <br>";
harga($jml);
echo "<br>";
bar($warna);

?>