<?php

$array = [];
$classrooms = "id";
$array[] = [
    $classrooms => 1,
    "name"=>"IPA",
    "students"=>[]
];

$array[0]["students"][] = [
    "Firstname"=>"Matej",
    "Lastname"=>"Grgic"
];

echo "<pre>";
print_r($array);
echo "</pre>";

print_r($array[0]["students"][0]["Lastname"]);