<?php

$b="<br />";

$array = array(2,3,4,5);   // Stari nacin
$array = [2,3,4,5];        // Novi nacin

echo $array[3]. PHP_EOL;
echo $b;

echo $array[count($array)-1].PHP_EOL;   // Izračun za dobivanje zadnjeg indeksa

$array[]="Osijek";
echo $b;
echo $array[count($array)-1].PHP_EOL;