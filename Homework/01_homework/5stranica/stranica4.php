<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once "skeleton/skeleton_head.php"; ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="one-half column" style="margin-top: 5%">
        <h1 >Zadaca 01</h1><br>
            <h1 >Stranica 4 - Skeleton</h1><br>
            <ul style="list-style-type:none">
              <li><a href="index.php">1. stranica</a></li>
              <li><a href="stranica2.php">2. stranica</a></li>
              <li><a href="stranica3.php">3. stranica</a></li>
              <li><a href="stranica4.php">4. stranica</a></li>
              <li><a href="stranica5.php">5. stranica</a></li>
            </ul>
            <div>
            <h1>Operatori 22-25</h1>
            <?php
                $b="<br />";
                $x=10;
                $y=2;
                echo "x je $x".$b;
                echo "y je $y".$b;
                echo 'Operatori incrementa/decrementa, nakon svakog primjera, $x se vraca na prvobitni iznos'. $b.$b;

                echo '      22-   operator ++$x prvo varijabli $x dodaje vrijednost 1 pa onda vraća takvu vrijednost sa novim iznosom: $x= '. ++$x; 
                echo $b;

                $x=10;
                echo '      23-   operator $x++ prvo vraca vrijednost $x kakva je a onda dodaje vrijednost 1: $x= '. $x++; 
                echo $b;

                $x=10;
                echo '      24-   operator --$x prvo varijabli $x oduzima vrijednost 1 pa onda vraća takvu vrijednost sa novim iznosom: $x= '. --$x; 
                echo $b;

                $x=10;
                echo '      25-   operator $x-- prvo vraca vrijednost $x kakva je a onda oduzima vrijednost 1: $x= '. $x--; 
                echo $b;
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
