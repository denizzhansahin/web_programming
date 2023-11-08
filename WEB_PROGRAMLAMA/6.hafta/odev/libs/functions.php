<?php

function safe_html($data){
    $data = bosluk_sil($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function bosluk_sil($data){
      return ltrim(rtrim($data));
}


function eposta_kontrol($data){
    if(strchr($data,"@")==true){
        if(strchr($data,".")==true){
            return 1;
        }
        else{
            $epostaErr = "E-Posta Adresinde yazım hatası var";
            return 0;
        }
    }
    else{
        $epostaErr = "E-Posta Adresi yazım hatası alan";
        return 0;
    }

}


?>