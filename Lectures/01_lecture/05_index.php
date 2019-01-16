<?php

$h="<hr />";
$b="<br />";

$x=4;
$y=5;
$z=$x+$y;

echo $z;
echo $b;

$x  = 29;
$y=4;
echo $x%$y;

$x = $x+1;  // Duga verzija
echo $b;
echo $x;

$x +=1;     // Kratka verzija
echo $b;
echo $x;

$x++;       // Najkraca verzija
echo $b;
echo $x;

$x="5";
$y=4;

var_dump($x==$y);
var_dump($x===$y);
var_dump($x!==$y);

if($x==='5'&&$y===4){
    echo "Istina";
}
echo $b;
if($x==='5'and $y===4){
    echo "Istina";
}

echo $b;
if($x==='5' || $y===4){
    echo "Istina";
}

echo $b;
if($x==='5' or $y===4){
    echo "Istina";
}

echo $b;
if($x==='5' xor $y===4){    // Istina mora biti ili jedan ili drugi uvjet ali ne smiju biti oba
    echo "Istina";
}

$x=false;
if(!$x){
    echo "I ovo je istina";
}

// Increment, decrement
// $x++, ++$x

$i=2;
$j=1;

$output = `pwd`;
echo $b;
echo $output;

$city = 'Osijek';
$city = $city.' is the best city';
$city .= 'is the best city';
echo $city;

class Ipa{

}
class Ferit{

}

$a = new Ipa();
var_dump($a instanceof Ipa);
var_dump($a instanceof Ferit);