<?php


//reference
//value

function toplama($sayi){
    $sayi += 10;
    echo $sayi."<br>";
}

$ornekSayi = 5;
toplama($ornekSayi);
echo $ornekSayi;


//value - farklı adreslerde tutulan değerler
//0011 => 5
//00012 => 15

function toplama2(&$sayi){
    $sayi += 10;
    echo $sayi."<br>";
}

$ornekSayi = 5;
toplama2($ornekSayi);
echo $ornekSayi;

//value - farklı adreslerde tutulan değerler
//0011 => 15
//00012 => 15


function yasHesapla($tarihler){
    for($i=0; $i < count($tarihler); $i++){
        $tarihler[$i] = 2023 - $tarihler[$i];
    }

    return $tarihler;
}

$liste = array(1990, 1985, 200);
echo "<pre>";
print_r(yasHesapla($liste));
print_r($liste);
echo "</pre>";


?>