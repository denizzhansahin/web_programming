<?php

//Diziler (Array)


// 1- Numeric Arrays
$renk1 = "Kırmızı";
$renk2 = "Mavi";
$renk3 = "Sarı";

$renkler = array("Kırmızı","Mavi","Sarı");
echo gettype($renkler)."<br>";
echo $renkler[0]."<br>";


$sayilar = array(18,23,32,45,59);
echo $sayilar[0]."<br>";

// 2- Associative Arrays
$plakalar = array("41","53","34");
$sehirler = array("kocaeli","rize","istanbul");

echo "$plakalar[0] : $sehirler[0]"."<br>";

$plaka_bilgileri = array("41" => "kocaeli","53"=>"rize","34"=>"istanbul",);

echo $plaka_bilgileri["41"]."<br>";


$telefon_rehberi = array(
    "ali" => "543333",
    "ahmet" => "444444",
    "ayşe" => "33333",
);

echo $telefon_rehberi["ali"];

?>