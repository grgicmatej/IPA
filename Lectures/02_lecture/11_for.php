<?php
for ($i=0;$i<=10;$i+=2){
   echo $i," IPA <br/>";
}
echo "<hr />";

// primarni brojevi

$b=22;
$prim = true;
for($i=2;$i<$b;$i++){
    if($b%$i===0){
        $prim=false;
        break;
    }
}
echo $b, $prim ? "je":" nije prim broj";