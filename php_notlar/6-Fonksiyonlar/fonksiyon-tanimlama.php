<?php

function selamlama(){
    echo "Merhaba Denizhan"."<br>";
}

selamlama();
selamlama();
selamlama();


function selamlama2(){
    for($i=0;$i<5;$i++){
        echo "Merhaba BTK"."<br>";
    }
}

selamlama2();

function toplama(){
    $a = 40;
    $b = 30;
    echo $a - $b;
}

toplama();

?>