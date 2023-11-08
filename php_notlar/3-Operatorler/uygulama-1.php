<?php


$a = 10;
$b = 20;
$c = 5;

$sonuc = ($a + $b) - ($a + $b + $c);
echo $sonuc;

$sonuc = ($a + $b + $c) % 3;

$sonuc = $b ** $c;

$sonuc = ($a > 50 and $a < 100);

$sonuc = ($a > 0 and $a % 2 == 0);
echo var_dump($sonuc);

$username = "denizhan";
$password = "1234";

$sonuc = ($username == "denizhan" and $password=="1234");
$sonuc = ($a > $b and $a > $c);
echo "a en büyük".$sonuc;

$sonuc = ($b > $a and $b > $c);
echo "b en büyük".$sonuc;

$sonuc = ($c > $a and $c > $b);
echo "c en büyük".$sonuc;

$vize1 = 60;
$vize2 = 60;
$final = 70;

$ortalama = (($vize1 + $vize2) / 2) * 0.6 + ($final * 0.4);
$gecmeDurumu = ($ortalama >= 50);

echo "geçme durumu : ".$gecmeDurumu;


?>