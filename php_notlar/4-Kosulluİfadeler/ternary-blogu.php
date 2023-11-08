<?php

$yas = 20;

if($yas >= 18){
    echo "ehliyet alabilir";
}else{
    echo "ehliyet alamaz";
}

echo "<br>";

$sonuc = (yas >= 18) ? "ehliyet alabilir" : "ehliyet alamaz";
echo $sonuc;


if($yas >= 18){
    if($egitim == "lise" or $egitim == "üniversite"){
        echo "ehliyet alabilir";
    }else{
        echo "eğitim durumunuz yetersizdir";
    }
}else{
    echo "yaşınız tutmuyor";
}


$sonuc = ($yas >= 18) ? (($egitim == "lise" or $egitim == "üniversite")
    ? "ehliyet alabilir"
    : "eğitim durumunuz yetersiz")
    : "yaşınız tutmuyor";
echo $sonuc;

?>