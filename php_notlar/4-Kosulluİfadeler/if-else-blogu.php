<?php

$username = "admin";
$password = "1234";

$kosul = ($username = "admin");

if($username == "admin" and $password == "1234"){
    echo "Merhaba BTK";
}
else{
    echo "Bilgileriniz yanlış";
}


if($username == "admin")
{

    if($password == "1234"){
        echo "Merhaba BTK";
    }else{
        echo "parola yanlış";
    }
}else{
    echo "username yanlış";
}


?>