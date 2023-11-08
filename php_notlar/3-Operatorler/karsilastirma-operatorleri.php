<?php

/*

== equal , eşittir, $x==$y
=== identical, eşittir ama tip kontrolü ile yap, $x===$y
!= not equal, eşit değildir, $x!=$y
<> not equal, eşit değildir, $x<>$y
> greater than, büyüktür, $x> $y
< less than , küçüktür, $x<$y
>= greater than or equal to $x>= $y
<= less than or equal to, $x <= $y
<=> spaceship, $x <=> $y
*/


$a = 30;
$b = 40;
$username = "denizhansahin";

$sonuc = ($a==$b);
$sonuc = ($a!=b);
$sonuc = ($username != "denizhansahin");
$sonuc = ($a == $b);
$sonuc = ($a != $b);
$sonuc = ($a > $b);
$sonuc = ($a >= $b);
$sonuc = ($a < $b);
$sonuc = ($a <= $b);
$sonuc = ($a <=> $b);

echo $sonuc;
echo var_dump($sonuc);

?>