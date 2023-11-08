<?php

    $ad = "Denizhan";
    $soyad = "Şahin";

    $mesaj = "My name is Denizhan Şahin";
    $mesaj = "My name is".$ad." ".$soyad." and ".$yas." years old";
    $mesaj = "My name is $ad $soyad and $yas years old.";

    echo "<br>";
    echo $mesaj;
    echo "<br>";
    echo $mesaj[0]."<br>";
    echo $mesaj[5]."<br>";


    //stirng fonksiyonları
    echo strlen($mesaj)."<br>"; //uzunluk
    echo str_word_count($mesaj)."<br>"; //kelime sayısı
    echo strtolower($mesaj)."<br>"; //hepsini küçük yaz
    echo strtoupper($mesaj)."<br>"; //hepsini büyük yaz
    echo ucfirst($mesaj)."<br>"; //ilk harf büyük yaz
    echo str_replace("Denizhan","deniz",$mesaj)."<br>"; //değiştir
    echo str_replace(["Denizhan","old"],["deniz","yil"],$mesaj)."<br>"; //değiştir



?>