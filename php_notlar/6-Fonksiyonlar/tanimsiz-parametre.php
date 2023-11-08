<?php

function intro(){
    $parametreSayisi = func_num_args(); // parametre sayısı
    echo $parametreSayisi;
    if($parametreSayisi == 0){
        echo "parametre yok";
    } else{
        /*
        echo func_get_arg(0); //indexe göre parametre değeri
        echo func_get_arg(1);
        echo func_get_arg(2);
        */

        $parametreler = func_get_args();

        foreach($parametreler as $parametre){
            echo $parametre."<br>";
        }
    }
}

intro();
intro("ali","yılmaz","kocaeli");

?>