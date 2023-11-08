<?php

//global scope
//local scope

//global scope
$x = 5;

echo $x;

function test(){
    //local scope
    $x = 10;
    echo $x;
}

test();
echo $x;



function test2(){
    global $x; //globalde tanımlanan scope kullanılır.
    echo $x;
}

test2();
echo $x;


function test3(){
    $GLOBALS["x"] = 10; //globalde ttanımlanan x değişkeni değişir
    echo $x;
}

test3();
echo $x;

?>