<?php

$h="<hr />";
$b="<br />";
$variable ='content';
echo $variable;
echo $h;
$message='<h1>IPA</h1>';
echo $message;
$message=<<<IPA
<p title="Inchoo PHP akademija">IPA</p>
IPA;
echo $h;
echo $message;

$variable = 'Osijek';

echo $h;
echo "Grad ".$variable;
echo $h;
echo "Grad ",$variable;
echo $h;
echo "Grad $variable";
echo $h;
echo "Grad{$variable}je najbolji";
echo $h;
echo 'Grad{$variable}je najbolji';  // Ako se stave jednostruki navodnici, ne radi

echo $h;
echo gettype($variable);
$variable=2;
echo $h;
echo gettype($variable);

$variable=2.1;
echo $h;
echo gettype($variable);

$variable=true;
echo $h;
echo gettype($variable);

$variable=[];
echo $h;
echo gettype($variable);

$variable=new stdClass();
echo $h;
echo gettype($variable);

$variable=null;
echo $h;
echo gettype($variable);

$variable=true;
echo $h;
print_r($variable);

echo $h;
var_dump($variable);