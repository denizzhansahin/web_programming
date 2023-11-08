<?php


//Array Funcitons

$notlar = array(60,70,40,80);
$plakalar = array("41"=>"kocaeli","34"=>"istanbul","53"=>"rize");

//elemanı sona ekleme
array_push($notlar,100);

//elemanı başa eklemek
array_unshift($notlar,20);

//elemanı silme - sondan
array_pop($plakalar);

//elemanı silme - baştan
array_shift($plakalar);



//sıralama -artan
sort($notlar); //value
sort($plakalar); //value

//sıralama - baştan
rsort($notlar);
arsort($plakalar); //value
ksort($plakalar); //key


//array to string 
$arr = array("denizhan","mail@gmail.com");
$str = implode(",",$arr);
print_r($arr);
echo $str;

print_r(array_count_values($notlar));
print_r(array_count_values($notlar));
echo array_rand($notlar);

$index = array_rand($notlar,2);
echo $notlar[$index[0]];
echo $notlar[$index[1]];



//saymak
echo count($notlar)."<br>";
echo count($plakalar);

//elemanları yazdir
print_r($notlar)."<br>";
print_r($plakalar)."<br>";

?>