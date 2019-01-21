<?php

if (isset($i)){
    echo 'yes'.PHP_EOL;
}

$city='Osijek';
echo strlen($city);


$city='   Osijek   ';
echo strlen($city);

$city=trim($city);

echo strlen($city);

$i=5;

if (is_int($i)){
    echo 'it is integer';


}

$text='<h1>CONTENT</h1>';
ECHO $text;

echo htmlspecialchars($text);

