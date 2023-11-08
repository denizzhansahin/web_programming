<?php

/*


a = b
a+= b
a -= b
a *= b
a /= b
a %= b
a **= b
a.=b     ---birlştirme operator  4.=5   ise 45 olur

*/

$a;
$a=20;
$b = 20;
$c= $a;
$d = ($a-10)*3;


 echo $a += $b . "<br>";
 echo $a -= $b . "<br>";
 echo $a *= $b . "<br>";
 echo $a /= $b . "<br>";
 echo $a %= $b . "<br>";
 echo $a **= $b . "<br>";
 echo $a .= $b . "<br>";


 $ad = "Deniz";
 $soyad = "Şahin";
 $ad .= $soyad;
echo $a , $b , $c , $d , $ad;




?>