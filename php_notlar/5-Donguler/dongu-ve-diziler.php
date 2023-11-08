<?php

    $ogrenciler = array("ali","ayşe","ahmet","deniz","mehmet");

    for($i = 0; $i < count($ogrenciler); $i+=1){
        echo $ogrenciler[$i]."<br>";
    }

    $i = 0;
    while($i < count($ogrenciler)){
        echo $ogrenciler[$i]."<br>";
        $i += 1;
    }

    $urunler = array(
        "100" => array(
            "urun adi" => "iphone 14",
            "fiyat" => 30000
        ),
        "100" => array(
            "urun adi" => "iphone 14",
            "fiyat" => 30000
        ),
    );

    for($i=0;$i<count($urunler);$i++){
        echo $urunler[$i][0]." ".$urunler[$i][1];
        echo "<br>";
    }

    for($i = 0; $i<count($urunler);$i++){
        print_r($urunler[$i]);
        echo "<br>";
    }

    $keys = array_keys($urunler);
    for($i=0;$i<count($urunler); $i++){
        echo $urunler[$keys[$i]]["urun_adi"];
        echo $urunler[$keys[$i]]["fiyat"];
        echo "<br>";
    }

?>