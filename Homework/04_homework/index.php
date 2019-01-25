<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Zadaca 04</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stil.css">
</head>
<body>
<div class="izbornik">
<div class="dropdown">
  <button class="dropbtn">Pregled zaposlenika</button>
</div>

<div class="dropdown">
  <button class="dropbtn">Unos novog zaposlenika</button>
</div>

<div class="dropdown">
  <button class="dropbtn">Promjena podataka na postojećem zaposleniku</button>
</div>

<div class="dropdown">
  <button class="dropbtn">Brisanje zaposlenika</button>
</div>

<div class="dropdown">
  <button class="dropbtn">Statistika</button>
  <div class="dropdown-content">
    <a href="#">Ukupna starost</a>
    <a href="#">Prosječna starost</a>
    <a href="#">Ukupna primanja</a>
    <a href="#">Prosječna primanja</a>
  </div>
</div>
</div>

      <?php                                                                            
        if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("pregled.php"); } // Pregled zaposlenika
        else if ($_GET['menu'] == "2") { include("unosnovog.php"); }        // Unos novog zaposlenika
        else if ($_GET['menu'] == "3") { include("Promjena.php"); }         // Promjena podataka
        else if ($_GET['menu'] == "4") { include("Brisanje.php"); }         // Brisanje zaposlenika
        else if ($_GET['menu'] == "5") { include("starost.php"); }          // Statistika starost
        else if ($_GET['menu'] == "6") { include("prosjecnastarost.php"); } // Statistika prosjecna starost
        else if ($_GET['menu'] == "7") { include("primanja.php"); }         // Statistika primanja
        else if ($_GET['menu'] == "8") { include("prosjecnaprimanja.php"); }// Statistika primanja
      ?>                                                              
    <footer>  
      <?php include_once "podnozje.php"; ?>
    </footer>












</body>
</html>