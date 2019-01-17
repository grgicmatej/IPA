<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 3</title>
</head>
<body>
    <h2><p style="text-align: center">Zadatak 3</p></h2>
    <br>
    <h3><p style="text-align: center">"Za promjenu parametara: url ...zadatak3.php?param1=Matej& param2=Grgic ili po izboru</p></h3>
    <br>
    <h1><p style="text-align: center"><?php echo isset($_GET["param1"]) ? $_GET["param1"] : "Niste upisali prvi parametar \"param1\"!"?></p></h1>
    <br>
    <h1><p style="text-align: center"><?php echo isset($_GET["param2"]) ? $_GET["param2"] : "Niste upisali drugi parametar \"param2\"!" ?></p></h1>
</body>
</html>