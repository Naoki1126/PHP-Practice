<?php
$data = [
    "name"=>"大泉",
    "gender" => "男性",
    "age" => 46
];

print($data['name']."\n");
print($data['gender']."\n");
print($data['age']."\n");

$data["address"] = "東京";

print($data["address"]);
?>

<?php
$dic = ["x" => 10, "y" => 20];

$dic["y"] = 4;

print($dic["x"]."\n");
print($dic["y"]."\n");

?>