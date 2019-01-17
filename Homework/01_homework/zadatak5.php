<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 5</title>
</head>
<body>
    <h2><p style="text-align: center">Zadatak 4</p></h2>
    <br>
    <h3><p style="text-align: center">"Za promjenu parametara: url ...zadatak5.php?x1=10&x2=20&x3=30&x4=aaaa ili po izboru</p></h3>
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
            $param1=$_GET["x1"];
        }else{
            $param1=0;
        }
        if(isset($_GET["x2"])){
            $param2=$_GET["x2"];
        }else{
            $param2=0;
        }
        if(isset($_GET["x3"])){
            $param3=$_GET["x3"];
        }else{
            $param3=0;
        }
        if(isset($_GET["x4"])){
            $param4=$_GET["x4"];
        }else{
            $param4=0;
        }
     ?>
     <p style="text-align: center">Parametri:</p>
     <ul style="list-style-type:none; text-align: center;">
        <li><?php echo $param1;?></li>
        <li><?php echo $param2;?></li>
        <li><?php echo $param3;?></li>
        <li><?php echo $param4;?></li>
    </ul>
</body>
</html>