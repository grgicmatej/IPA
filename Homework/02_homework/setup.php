<style>
table{
    border-collapse: collapse;
}
table,tr,td{
    border: 5px solid blue;
    height: 3em;
    width: 3em auto;
    border-color: #3E8FFE;
}
td{
    text-align: right;
}
</style>

<?php 
if(!isset($_POST['broj'])){
    exit;
}else{
    $numbersArray = $_POST['broj'];
    $pocetniniz = array_map('intval', explode(',', $numbersArray));
    $numsToExclude = [];
    sort($pocetniniz);
    $najvecibroj = end($pocetniniz);
    for ($i = 0; $i < count($pocetniniz); $i++) {
        if ($pocetniniz[$i] % 2 === 0) {
            $niz[] = $pocetniniz[$i];
            continue;
        }
    }
    sort($niz, SORT_NUMERIC);
    $korijen=sqrt($najvecibroj);
    $zaokruzeno=$korijen;
    //$zaokruzeno=(intval($korijen))+1;
    $maxbroj=pow($zaokruzeno,2);
    $sredina = array_sum($niz) / count($niz);
    $niz = array_values(array_diff($niz, $numsToExclude));
    $niz = array_unique($niz);
    sort($niz);
    echo "<br/>";
    $najblizibroj = null;
    foreach ($niz as $key => $value) {
        if ($value >= $sredina && $value % 2 === 0) {
            $najblizibroj = $value;
            break;
        }
    }
    $y=1;       // $y pocinje s 1, ti brojevi će se ispisivati ako je y = nekom broju iz niza $niz
    $x = $zaokruzeno;   // x će predstavljati (korijen iz x zaokružen na prvi idući cijeli broj)^2 = To je najveći broj u nizu i do njega se ispisuje
    echo "<table>";         // Otvara tablicu
    for($i=0;$i<=$x;$i++){  // Ovo određuje broj redova, umjesto $i<=$x treba biti $i<$z - određuje broj redova
        echo "<tr>";        // Počinje red
        if($y<$maxbroj){          // Dok god je broj ispisanih brojeva manji od najvećeg broja u tablici, ispisuje i zavrsava s tim redom, zapocinje novi-
            for($j=0;$j<$x;$j++){       // korijen iz x zaokružen na prvi veći broj = $KORIJEN - određuje broj stupaca
                if (in_array($y, $niz) && $y===$najblizibroj) {
                    echo "<td><b>", $y, "</b></td>";      // Ispisuje prvi parni $y bold nakon srednjeg     
                }else if(in_array($y, $niz)){
                    echo "<td>", $y, "</td>";   // Ispisuje $y u polju 
                }else{
                    echo "<td>","</td>";
                }
                ++$y;
            }
        echo "</tr>";}      // završava red
        }
    echo "</table>";        // Završava tablicu
}