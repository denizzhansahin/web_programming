<?php

/*
and => x ve y'nin true olması ile sonuç true olur
or => x ve y'den herhangi birinin true olması ile sonuç true olur
xor => x ve y'den her hangibirinin true olması ile sonuç false olur
! => x'in tersini alır
*/


$yas = 20;
$mezuniyet = "lise";

$sonuc = ($yas >= 18) and ($mezuniyet=="lise"); // true & false => false
//and 
//false & false => false
//true & false => false
//true & true => true

//or
//true & false => true
//true & true => true
//false & false => true
$sonuc = ($yas >= 18) and ($mezuniyet=="lise" or $mezuniyet=="üniversite" or $mezuniyet=="yükseklisans");

//xor
//true & false => true
//true & true => false
//false & false => false


//not 
$sonuc = !(true);
echo var_dump($sonuc);


?>