<?php

$ogrenciler = array("ali","ayşe","ahmet","deniz");

foreach($ogrenciler as $ogrenci){
    echo $ogrenci."<br>";
}

$urunler = array(
    array("iphone 14",30000),
    array("iphone 15",40000),
    array("iphone 16",50000),
);

foreach($urunler as $urun){
    echo $urun[0]." ".$urun[1]."<br>";
}


$urunle2 = array(
    "100" => array(
        "urun adi" => "iphone 14",
        "fiyat" => 30000
    ),
    "100" => array(
        "urun adi" => "iphone 14",
        "fiyat" => 30000
    ),
);

foreach($urunler as $key => $value){
    echo $key." ".$value["urun_adi"]." ".$value["fiyat"]."<br>";
}

?>