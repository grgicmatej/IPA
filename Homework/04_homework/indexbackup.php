<body>
        <div class="uredenje">
        <ul class="dropdown menu" data-dropdown-menu>
          <ul class="dropdown menu" data-dropdown-menu>   
            <li><a href="index.php?menu=1">Pregled zaposlenika</a></li>
            <li><a href='index.php?menu=2'>Unos novog zaposlenika</a></li>
            <li><a href='index.php?menu=3'>Promjena podataka postojećem zaposleniku</a></li>      
            <li><a href='index.php?menu=4'>Brisanje zaposlenika</a></li>            
            <li>
              <a href="#0">Statistika</a>
                <ul class="menu">
                  <li><a href="index.php?menu=5">Ukupna starost</a></li>
                  <li><a href="index.php?menu=6">Prosječna starost</a></li>
                  <li><a href="index.php?menu=7">Ukupna primanja</a></li>
                  <li><a href="index.php?menu=8">Prosječna primanja</a></li>
                </ul>
            </li>                          
          </ul>
        </ul>
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
    <?php include_once "skripte.php" ?>
  </body>