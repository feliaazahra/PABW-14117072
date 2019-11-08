<?php

function faktorial($angka){
    $hasil = 1;
    for($i=$angka;$i>0;$i--){
        $hasil = $hasil * $i;
    }

    echo "Faktorial dari $angka adalah $hasil";
}

$angka = 4;

faktorial($angka);

?>