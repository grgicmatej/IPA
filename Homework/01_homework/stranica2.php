<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php include_once "bootstrap/bootstrap_link.php" ?>
        <title>Zadaca 01_02</title>
    </head>
    <body>
        <h1 >Zadaca 01</h1><br>
        <h1 >Stranica 2 - Bootstrap</h1><br>
        <ul style="list-style-type:none">
            <li><a href="index.php">1. stranica</a></li>
            <li><a href="stranica2.php">2. stranica</a></li>
            <li><a href="stranica3.php">3. stranica</a></li>
            <li><a href="stranica4.php">4. stranica</a></li>
            <li><a href="stranica5.php">5. stranica</a></li>
        </ul> 
        <div>
            <h1>Operatori 7-12</h1>
            <?php
                $b="<br />";
                $x=10;
                $y=2;
                echo "x je $x".$b;
                echo "y je $y".$b;
                echo 'nakon svake operacije, $x i $y ce se postaviti na pocetne vrijednosti.'. $b.$b;
                echo '      7-   izjednacavanje $x=$y, varijabla $x je nakon izjednacavanja: '. $x=$y;
                echo $b;

                $x=10;
                $y=2;
                echo '      8-   zbroj/dodavanje vrijednosti varijable $y varijabli $x $x+=$y, varijabla $x je nakon zbrajanja: '. $x+=$y;
                echo $b;

                $x=10;
                $y=2;
                echo '      9-  oduzimanje vrijednosti varijable $y od varijable $x $x-=$y, varijabla $x je nakon oduzimanja: '. $x-=$y;
                echo $b;

                $x=10;
                $y=2;
                echo '      10-  mnozenje vrijednosti varijable $x sa varijablom $y $x*=$y, varijabla $x je nakon mnozenja: '. $x*=$y;
                echo $b;

                $x=10;
                $y=2;
                echo '      11-  Dijeljenje vrijednosti varijable $x sa varijablom $y $x/=$y, varijabla $x je nakon dijeljenja: '. $x/=$y;
                echo $b;
                
                $x=10;
                $y=2;
                echo '      12-  modulo kada se vrijednost varijable $x podijeli sa varijablom $y $x%=$y, modulo(ostatak) nakon izračuna iznosi: '. $x%=$y;
                echo $b;
            ?>
        </div>
        <?php include_once "bootstrap/bootstrap_script.php" ?>
    </body>
</html>