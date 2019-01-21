<?php

$array=["name"=>"Matej","id"=>"05"];

echo "<pre>";
var_dump($array);
echo "</pre>";


echo "<pre>";
echo $array["name"];        // Ispisivanje određenog dijela
echo "</pre>";

$array["gender"]="male";    // dodavanje vrijednosti "male" pod ključem "gender"
echo "<pre>";
var_dump($array);
echo "</pre>";

