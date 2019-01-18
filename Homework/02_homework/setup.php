<style>
table{
    border-collapse: collapse;
}
table,tr,td{
    border: 1px solid blue;
}
td{
    text-align: right;
}

</style>
<?php
$y=0;       // $y pocinje s 0, ti brojevi će se ispisivati
$x = isset($_GET["x"]) ? $_GET["x"] : 15;   // x će predstavljati (korijen iz x zaokružen na prvi idući cijeli broj)^2 = To je najveći broj u nizu i do njega se ispisuje
echo "<table>";         // Otvara tablicu
for($i=0;$i<=$x;$i++){  // Ovo određuje broj redova, umjesto $i<=$x treba biti $KORIJEN - određuje broj redova
    echo "<tr>";        // Počinje red
    if($y<$x){
        for($j=0;$j<4;$j++){                // Umjesto 4 treba staviti korijen iz x zaokružen na prvi veći broj = $KORIJEN - određuje broj stupaca
            echo "<td>",$y++,"</td>";       // Ispisuje $y u svakoj kućici       
        }
    echo "</tr>";}      // završava red
    }
echo "</table>";        // Završava tablicu