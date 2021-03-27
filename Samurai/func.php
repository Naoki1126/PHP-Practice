<?php
function hello($str){
    print($str);
}

hello("Hello world"."\n");
hello("Hello PHP");
?>

<?php
function goodNight(){
    print("GoodNight");
}

goodNight();
?>

<?php
function hello2($a,$b){
    print($a + $b);
}

hello2(10,1232);
?>

<?php
function greet($a = "hello"){
    print($a."\n");
}

greet();
greet("GoodEvening");

?>

<?php
function add ($a, $b){
    return $a + $b;
}

$num = add(2,3);
print($num);

?>

<?php
function calc($a,$b){
    return $a * $b;
}

$answer = calc(2,3);
print($answer."\n");


function triangle_area($a,$b){
    return $a * $b / 2;
}

$area = triangle_area(3,4);
print($area);

$file_list = [];

function add_list($text){
    global $file_list;
    array_push($file_list,$text.".php");

}

add_list("aaa");
add_list("bbb");
var_dump($file_list);

?>