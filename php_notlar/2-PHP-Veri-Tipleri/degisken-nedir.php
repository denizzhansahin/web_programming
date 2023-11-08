<?php

    $maas1 = 21000;
    $maas2 = 16000;
    $maas6 = 240000;

    $vergiOrani = 0.35;
    $vergiOrani2 = 0.27;

    echo  $maas1 - ( $maas1 * $vergiOrani); //maaş
    echo "<br>";

    echo  $maas2 - ( $maas2 * $vergiOrani); //maaş
    echo "<br>";

    echo  $maas6 - ( $maas6 * $vergiOrani2); //maaş
    echo "<br>";

    echo 20000 - (200000 * 0.27); //maaş
    echo "<br>";
    echo 15000 - (150000 + 0.27); //maaş2
    echo "<br>";
    echo 25000 - (250000 + 0.27); //maaş3

?>