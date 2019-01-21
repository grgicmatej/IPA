<?php
$stayInLoop = true;
$i=0;

while($stayInLoop){
    echo $i+1,"  IPA","<br />";
    $stayInLoop = ++$i<10;
}

echo "<hr />";
$i=0;
while($i<10){
    if ($i===2){
        $i++;
        continue;
    }
    if($i===5){
        break;
    }
    echo $i,"  IPA","<br />";
    $i++;
}