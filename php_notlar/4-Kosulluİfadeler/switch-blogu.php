<?php

$sayi = 5;

if($sayi == 5){
    echo "beş";
}elseif($sayi == 6){
    echo "altı";
}else{
    echo "yanliş veri";
}

switch($sayi){
    case 5:
        echo "beş";
        break;
    case 6:
        echo "altı";
        break;
    default:
        echo "yanlış veri";
}


$not = 110;
if($not >= 0 and $not < 25){
    echo "notunuz : 0";
}elseif($not>=25 and $not<45){
    echo "notunuz : 1";
}else{
    echo "yanlış";
}

switch(true){
    case($not>= 0 and $not<25):
        echo "notunuz : 0";
        break;
    case ($not>=25 and $not<45):
        echo "notunuz : 1";
        break;
    default:
        echo "yanliş";
}


$ay = "ocak";
switch($ay){
    case "aralik":
    case "ocak" :
    case "şubat" :
        echo "kış";
        break;
    default:
        echo "veri yaziniz ay verisi";
}

?>