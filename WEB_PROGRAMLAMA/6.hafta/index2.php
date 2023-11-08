<?php 
//ödev
$d=strtotime("tomorrow");
$e = date("Y-M-d h:i:s", $d);
echo var_dump($e). "<br>";
echo $e."<br>";

$aylar = array("ocak","subat","mart","nisan","mayis","haziran","temmuz","agustos","eylul","ekim","kasim","aralik");
$ing_aylar = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

$kontrol = 0;
foreach($ing_aylar as $ay){
    if(strchr($e,$ay)==true){
        $metin = str_replace($ay, $aylar[$kontrol], $e);
            
        echo $metin."<br>";
    }
    $kontrol++;
}

?>