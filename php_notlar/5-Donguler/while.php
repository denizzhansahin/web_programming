<?php

for($s=1;$s<=100;$s+=1){
    echo $s."<br>";
}

$i = 1;
while($i <= 100){
    echo $i."<br>";
    $i += 1;
}

$d = 1;
$toplam = 0;

while($i<=100){
    $toplam += $d;
    $i += 1;
}

echo $toplam;

?>