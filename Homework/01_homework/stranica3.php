<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "foundation/foundation_head.php";?>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1 >Zadaca 01</h1><br>
          <h1 >Stranica 3 - Foundation</h1><br>
          <ul style="list-style-type:none">
            <li><a href="index.php">1. stranica</a></li>
            <li><a href="stranica2.php">2. stranica</a></li>
            <li><a href="stranica3.php">3. stranica</a></li>
            <li><a href="stranica4.php">4. stranica</a></li>
            <li><a href="stranica5.php">5. stranica</a></li>
          </ul>
          <div>
            <h1>Operatori 13-21</h1>
            <?php
                $b="<br />";
                $x=10;
                $y=2;
                echo "x je $x".$b;
                echo "y je $y".$b;
                echo 'Operatori usporedbe.'. $b.$b;

                echo '      13-   Provjerava je li varijabla $x jednaka varijabli $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: '; 
                  if ($x==$y){
                    echo "true";
                  } else{
                    echo "false";
                  }
                echo $b;

                echo '      14-   Provjerava je li varijabla $x jednaka varijabli $y po iznosu i tipu podatka preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x===$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      15-   Provjerava vrijednosti varijable $x i varijable $y po iznosu preko if petlje i ako nisu jednake, dakle ukoliko je uvjet da nisu jednake istinit, vratiti ce true: ';
                if ($x!=$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      16-   Provjerava je li varijabla $x različita od varijable $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x<>$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      17-   Provjerava je li varijabla $x različita od varijable $y po iznosu ili po tipu podatka preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x!==$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      18-   Provjerava je li varijabla $x veća od varijable $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x>$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      19-   Provjerava je li varijabla $x manja od varijable $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x<$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;

                echo '      20-   Provjerava je li varijabla $x veća ili jednaka varijabli $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x>=$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;
                
                echo '      21-   Provjerava je li varijabla $x manja ili jednaka varijabli $y po iznosu preko if petlje, ukoliko je tvrdnja istinita, vratiti ce true: ';
                if ($x<=$y){
                  echo "true";
                } else{
                  echo "false";
                }
                echo $b;
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "foundation/foundation_script.php"; ?>
  </body>
</html>
