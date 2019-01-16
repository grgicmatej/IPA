<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 6</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h2><p style="text-align: center">Zadatak 6</p></h2>
            <br>
            <h3><p style="text-align: center">"Za promjenu parametara: url ...zadatak6.php?x1=10&x2=20&x3=30&x4=aaaa ili po izboru</p></h3>
            <br>
            <h1><p style="text-align: center"><?php echo isset($_GET["x1"]) ? "prvi parametar:".$_GET["x1"]: "Niste upisali prvi parametar \"x1\"! Koristit ce se 0"?></p></h1>
            <br>
            <h1><p style="text-align: center"><?php echo isset($_GET["x2"]) ? "drugi parametar:".$_GET["x2"]: "Niste upisali drugi parametar \"x2\"! Koristit ce se 0" ?></p></h1>
            <br>
            <h1><p style="text-align: center"><?php echo isset($_GET["x3"]) ? "treci parametar:".$_GET["x3"]: "Niste upisali drugi parametar \"x3\"! Koristit ce se 0" ?></p></h1>
            <br>
            <h1><p style="text-align: center"><?php echo isset($_GET["x4"]) ? "cetvrti parametar:".$_GET["x4"]: "Niste upisali drugi parametar \"x4\"! Koristit ce se 0" ?></p></h1>
            <br>
            <?php
                if(isset($_GET["x1"])){
                    (int)$param1=$_GET["x1"];
                }else{
                    $param1=0;
                }
                if(isset($_GET["x2"])){
                    (int)$param2=$_GET["x2"];
                }else{
                    $param2=0;
                }
                if(isset($_GET["x3"])){
                    (int)$param3=$_GET["x3"];
                }else{
                    $param3=0;
                }
                if(isset($_GET["x4"])){
                    (int)$param4=$_GET["x4"];
                }else{
                    $param4=0;
                }
                $rez=$param1+$param2+$param3+$param4;
             ?>
        </div>
        <div class="large-4 cell"></div>
        <div class="large-3 cell">
            <h3><p style="text-align: center">Parametri:</p></h3>
            <h4><ul style="list-style-type:none; text-align: right;">
                <li><?php echo $param1;?></li>
                <li><?php echo $param2;?></li>
                <li><?php echo $param3;?></li>
                <li><?php echo"+   ". $param4;?></li>
                <li>---------------------</li>
                <li><?php echo $rez;?></li>
             </ul></h4>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html> 
