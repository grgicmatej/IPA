<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 4</title>
</head>
<body>
    <h2><p style="text-align: center">Zadatak 4</p></h2>
    <br>
    <h3><p style="text-align: center">"Za promjenu brojeva: url ...zadatak4.php?x1=10& x2=20&& x3=30 ili po izboru</p></h3>
    <br>
    <h1><p style="text-align: center"><?php echo isset($_GET["x"]) ? "prvi broj:".$_GET["x"]: "Niste upisali prvi parametar \"x\"! Koristit ce se 0"?></p></h1>
    <br>
    <h1><p style="text-align: center"><?php echo isset($_GET["y"]) ? "drugi broj:".$_GET["y"]: "Niste upisali drugi parametar \"y\"! Koristit ce se 0" ?></p></h1>
    <br>
    <h1><p style="text-align: center"><?php echo isset($_GET["z"]) ? "treci broj:".$_GET["z"]: "Niste upisali drugi parametar \"z\"! Koristit ce se 0" ?></p></h1>
    <br>
    <?php
        if(isset($_GET["x"])){
            $broj1=(int)$_GET["x"];
        }else{
            $broj1=0;
        }
        if(isset($_GET["y"])){
            (int)$broj2=(int)$_GET["y"];
        }else{
            $broj2=0;
        }
        if(isset($_GET["z"])){
            (int)$broj3=(int)$_GET["z"];
        }else{
            $broj3=0;
        }
        $rez=$broj1+$broj2+$broj3;
        echo "Rezultat zbroja je: ".$broj1 ." + ".$broj2 ." + ".$broj3 ." = ".$rez;
    ?>
</body>
</html>