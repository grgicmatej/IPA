<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zadaca 01_01</title>
    </head>
    <body>
        <h1 >Zadaca 01</h1><br>
        <h1 >Stranica 1 - bez RWD</h1><br>
        <ul style="list-style-type:none">
            <li><a href="index.php">1. stranica</a></li>
            <li><a href="stranica2.php">2. stranica</a></li>
            <li><a href="stranica3.php">3. stranica</a></li>
            <li><a href="stranica4.php">4. stranica</a></li>
            <li><a href="stranica5.php">5. stranica</a></li>
        </ul>
        <div>
            <h1>Operatori 1-6</h1>
            <?php
                $b="<br />";
                $x=10;
                $y=2;
                echo "x je $x".$b;
                echo "y je $y".$b;
                echo 'varijabla $z ce biti rezultat'.$b.$b;
                echo '      1-   Zbrajanje $z=$x+$y: '. $z=$x+$y;
                echo $b;
                echo '      2-   Oduzimanje $z=$x-$y: '. $z=$x-$y;
                echo $b;
                echo '      3-   Mnozenje $z=$x*$y: '. $z=$x*$y;
                echo $b;
                echo '      4-   Djeljenje $z=$x/$y: '. $z=$x/$y;
                echo $b;
                echo '      5-   Modulo $z=$x%$y: '. $z=$x%$y;
                echo $b;
                echo '      6-   Potencije $z=$x**$y: '. $z=$x**$y;
            ?>
        </div>
    </body>
</html>