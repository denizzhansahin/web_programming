<?php

function toplama(){
    return 20 + 30;
}

echo toplam();

function sene(){
    return date('Y');
}

function yasHesapla(){
    return sene() - 1900;
}

$yas = yasHesapla();

echo $yas;


function selamlama3(){
    if(saat()<12){
        return "günaydın";
    }else{
        return "iyi günler";
    }
}

echo selamlama3();

?>