<div class="izbornik">
  <div class="dropdown">
    <a class="dropbtn" href="index.php?menu=1">Pregled zaposlenika</a>
  </div>
  <div class="dropdown">
    <a class="dropbtn" href="index.php?menu=2">Unos novog zaposlenika</a>
  </div>
  <div class="dropdown">
    <a class="dropbtn" href="index.php?menu=3">Promjena podataka na postojećem zaposleniku</a>
  </div>
  <div class="dropdown">
    <a class="dropbtn" href="index.php?menu=4">Brisanje zaposlenika</a>
  </div>
  <div class="dropdown">
    <a class="dropbtn">Statistika</a>
    <div class="dropdown-content">
      <a href="index.php?menu=5">Ukupna starost</a>
      <a href="index.php?menu=6">Prosječna starost</a>
      <a href="index.php?menu=7">Ukupna primanja</a>
      <a href="index.php?menu=8">Prosječna primanja</a>
    </div>
  </div>
</div>
<?php                                                                            
  if (!isset($_GET['menu']) || $_GET['menu'] === "1") { include("1_pregled.php"); } // Pregled zaposlenika
  else if ($_GET['menu'] === "2") { include("2_unosnovog.php"); }        // Unos novog zaposlenika
  else if ($_GET['menu'] === "3") { include("3_Promjena.php"); }         // Promjena podataka
  else if ($_GET['menu'] === "4") { include("4_Brisanje.php"); }         // Brisanje zaposlenika
  else if ($_GET['menu'] === "5") { include("5_starost.php"); }          // Statistika starost
  else if ($_GET['menu'] === "6") { include("6_prosjecnastarost.php"); } // Statistika prosjecna starost
  else if ($_GET['menu'] === "7") { include("7_primanja.php"); }         // Statistika primanja
  else if ($_GET['menu'] === "8") { include("8_prosjecnaprimanja.php"); }// Statistika primanja
  else {include("1_pregled.php");}
?>  