<?php

$username = "admin";
$password = "1234";

if($username != "admin"){
    echo "kullanici adi yanliş";
}elseif($password != "1234"){
    echo "parola yanlış";
}else {
    echo "Merhaba BTK";
}


$saat = 8;
if($saat < 10){
    echo "günaydın";
}elseif($saat < 19){
    echo "iyi günler";
}else{
    echo "iyi akşamlar";
}

?>