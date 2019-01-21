<?php

$niz = [1,2,3,4,5,6,7,8,9,1,2,4,];

for($i=0;$i<count($niz);$i++){
   echo $niz[$i], "<br />";
}
echo "<hr/>";

foreach ($niz as $i){
    echo $i, "<br/>";
}
echo "<hr/>";

foreach($_SERVER as $key => $value){
    if($key==="PATH"){
        break;
    }

    echo "za $key je postavljena vrijednost $value <br/>";
}