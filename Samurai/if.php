<?php

$num = 10;
if($num >= 10){
    print("Hello World"."\n");
}

if ($num < 10){
    print("Hello PHP"."\n");
}

if ($num > 5 and $num < 12){
    print("Hello!!!"."\n");
}

if ($num > 10){
    print("numは10より大きい"."\n");
}else{
    print("numは10より小さい"."\n");
}

if ($num > 10){
    print("num is over 10");
}elseif($num < 10 and $num < 5){
    print("num is minimum 10 and minimum 5");
}else{
    print("num equal 10");
}


function check($num){
    if ($num == 42){
        print("Answer to the Ultimate Question of Life, the Universe, and Everything"."\n");
    }
}

check(42);


$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num;
    global $odd_num;
    if ($num % 2 == 0){
        array_push($even_num, $num);
    }elseif($num % 2 == 1){
        array_push($odd_num, $num);
    }

}

sort_number(2);
sort_number(1);
sort_number(11);
sort_number(13);
sort_number(24);

var_dump($even_num);
var_dump($odd_num);

?>