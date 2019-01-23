<?php 

//$x = broj redova
//$y = broj stupaca
//$a = niz s brojevima za ispis
function niz($x, $y, &$a) 
{ 
    $val = 1;   // Prvi broj
    $minR = 0;  // Najmanji red
    $minS = 0;  // Najmanji stupac
    
    while ($minR < $x && $minS < $y ){ 
        for ($i = $minS; $i < $y; ++$i)//{ // Print prvog reda od preostalih redova od (lijevo prema desno)
            $a[$minR][$i] = $val++; 
            $minR++; 
            for ($i = $minR; $i < $x; ++$i)//{ // Print zadnjeg stupca od preostalih(skroz desni)
                $a[$i][$y - 1] = $val++; 
                $y--;    
                if ($minR < $x){ // Print zadnjeg reda od preostalih redova (desno prema lijevo)
                for ($i = $y - 1; $i >= $minS; --$i) 
                    $a[$x - 1][$i] = $val++; 
                    $x--; 
                }                 
                if ($minS < $y) { // Print prvog stupca od preostalih (od dolje prema gore)
                for ($i = $x - 1; $i >= $minR; --$i) 
                $a[$i][$minS] = $val++; 
                $minS++; 
                } 

    }   // Zatvara while
}   // Zatvara funkciju
  
// Tablica test
$x = isset($_GET['red']) ? $_GET['red']: 0; 
$y = isset($_GET['stupac']) ? $_GET['stupac']: 0; 
niz($x, $y, $a); 
echo "<table>";
    for ($i = 0; $i < $x; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $y; $j++) { 
        echo "<td><div class='divdiv'>"; 
            echo ($a[$i][$j]);
        echo "</div></td>"; 
    } 
    echo "</tr>";
}
?> 

