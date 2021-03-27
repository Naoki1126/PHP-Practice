<?php
$hello = "Hello php\n";
$num = 42;

print($hello);
print($num);
?>

<?php
function hoge(){
    $name = "侍太郎";
}

print $name

?>

<?php
$name2 = "侍二郎";

function func(){
    global $name2;
    print($name2);
}

print($name2."\n")
?>