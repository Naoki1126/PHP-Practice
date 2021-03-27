<?php
$customers = ["侍 太郎","侍 二郎","侍 三郎"];

foreach ($customers as &$customer) {
    print($customer."\n");
}

array_push($customers, "侍 四郎");

var_dump($customers);

var_dump(count($customers));
?>


<?php
$numlist = ["one", "two", "three"];
print($numlist[1]."\n");

$stringlist = [];

array_push($stringlist,"samurai");
var_dump($stringlist);
?>