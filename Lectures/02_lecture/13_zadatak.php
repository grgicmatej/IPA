<?php
// za 2 parametra n1 i n2 ispisi koji je veci

$param1=$_GET["n1"];
$param2=$_GET["n2"];


if(!is_numeric($param1)&&!is_numeric($param2)){
    if($param1<$param2){
        echo "veci je $param2";
    }else if($param1>$param2){
        echo "veci je $param1";
    }else{
        echo "jednaki su";
    }
    }else{
    echo "nisi upisao broj";
}
