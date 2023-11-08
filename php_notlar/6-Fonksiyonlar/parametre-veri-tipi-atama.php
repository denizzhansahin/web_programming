<?php

function toplama($sayi1,  $sayi2){
    return $sayi1 +$sayi2;
}

echo toplama("10","20");
// hatalı echo toplama("10","a20");

//declare(strict_types=1);
function toplama2(int $sayi1, int $sayi2, bool $isActive, array $sayilar) : float{
    return $sayi1 +$sayi2;
}

echo toplama2(10,20,true,[10,20]);

?>