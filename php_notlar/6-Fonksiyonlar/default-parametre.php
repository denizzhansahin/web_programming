<?php

function selamlama($isim, $mesaj){
    return "$mesaj $isim";
}

$sonuc = selamlama("ahmet","merhaba");


function selamlama2($isim="Misafir", $mesaj="İyi Günler"){
    return "$mesaj $isim";
}

$sonuc = selamlama2("ahmet","merhaba");
$sonuc = selamlama2("ahmet");
$sonuc = selamlama2();


function kareAl($taban, $us = 2){
    return $taban ** $us;
}

$sonuc = kareAl(2,3);
$sonuc = kareAl(2);
$sonuc = selamlama("deniz","şahin");

echo $sonuc;

?>