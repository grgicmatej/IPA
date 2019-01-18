<style>
table{
    border-collapse: collapse;
}
table,tr,td{
    border: 5px solid blue;
}
td{
    text-align: right;
}
</style>
<?php

// Potrebne varijable
/*
$niz = zadani niz brojeva
$x = ((korijen iz $najvecibroj, zaokruzen na cijeli broj)+1) na kvadrat = najveci broj u tablici
$z = ((korijen iz $najvecibroj, zaokruzen na cijeli broj)+1) = definira broj redova i stupaca
$y = ispis brojeva, od 1 do $x
$sum = zbroj svih brojeva
$aritmet = aritmeticka sredina tog niza
*/
foreach ($_POST as $key => $value) {
    $niz[]=($value);
  }
var_dump($niz);
//$testniarr=[1,2,3,4,5,6,1];
//$niz=[$_GET["broj"]];
//echo "<pre>";
//sort($niz);
//var_dump ($niz);
//echo "</pre>";
//echo "<pre>";
//print_r ($testniarr);
//echo "</pre>";


$y=1;       // $y pocinje s 1, ti brojevi će se ispisivati
$x = isset($_GET["x"]) ? $_GET["x"] : 0;   // x će predstavljati (korijen iz x zaokružen na prvi idući cijeli broj)^2 = To je najveći broj u nizu i do njega se ispisuje
echo "<table>";         // Otvara tablicu
for($i=0;$i<=$x;$i++){  // Ovo određuje broj redova, umjesto $i<=$x treba biti $i<$z - određuje broj redova
    echo "<tr>";        // Počinje red
    if($y<$x){          // Dok god je broj ispisanih brojeva manji od najvećeg broja u tablici, ispisuje i zavrsava s tim redom, zapocinje novi-
        for($j=0;$j<5;$j++){                // Umjesto 4 treba staviti korijen iz x zaokružen na prvi veći broj = $KORIJEN - određuje broj stupaca
            echo "<td>",$y++,"</td>";       // Ispisuje $y u svakoj kućici       
        }
    echo "</tr>";}      // završava red
    }
echo "</table>";        // Završava tablicu