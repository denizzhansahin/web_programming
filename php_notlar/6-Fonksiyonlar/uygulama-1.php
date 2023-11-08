<?php

function yazdir($kelime,$adet){
    for($ü = 0; $i < adet; $i++){
        echo $kelime."<br>";
    }
}

function hesapla($kisa, $uzun){
    $alan = $kisa * $uzun;
    $cevre = ($kisa + $uzun) * 2;
    return "çevre : $cevre, alan : $alan";
}

echo hesapla(10,15);


function yaziTuraAt(){
    $sayi = rand(1,100);
    if($sayi<50){
        echo "Tura";
    } else{
        echo "Yazı";
    }
}


function tamBolenleriBul($sayi){
    $tamBolenler = array();

    for($i = 2; $i < $sayi; $i++){
        if($sayi % $i == 0){
            array_push($tamBolenler, $i);
        }
    }

    return $tamBolenler;
}

print_r(tamBolenleriBul(50));

?>