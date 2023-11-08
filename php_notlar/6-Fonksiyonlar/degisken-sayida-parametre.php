<?php 

function toplam($a,$b){
    return $a + $b;
}

toplam(10,20);
echo toplam(10,20);
// hata - toplam(10,20,30);





$sayilar = array(10,20,30);


function toplam2($sayilar1){
    $toplam = 0; // int türü

    // Dizinin elemanlarını topla
    foreach($sayilar1 as $sayi){
        $toplam += $sayi;
    }

    $toplam2 = (int)$toplam;

    // Toplamı döndür
    return $toplam2;
}

echo toplam2($sayilar);









function toplam3(...$sayilar2){
    $toplam3 = 0;
    foreach($sayilar2 as $sayi){
        $toplam3 += $sayi;
    }
    return $toplam3;
}

echo toplam3(10,20,30,40);
echo toplam3(10,20,30,40,50,60,70,80);


?>