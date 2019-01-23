<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php"?>
  </head>
  <body>
  <div class="grid-container">
      <div class="grid-x">
        <div class="large-12 cell">
          <main>
		        <section id="unos">
		        	<header><h1>Input</h1></header>
			        <form method="get" action="index.php">
                <label for="red"><p class="unostekst">Broj redaka</p></label>
                <input type="number" class="unos" name="red" id="red" min="1" value="<?php echo $_GET['red'] ?>"/>
                <label for="stupac"><p class="unostekst">Broj stupaca</p></label>
                <input type="number" class="unos" name="stupac" id="stupac" min="1" value="<?php echo $_GET['stupac'] ?>"/>
                <input type="submit" id="kreiraj" value="Kreiraj tablicu"/>
              </form>
		        </section>
		        <section id="prikaz">
			        <header><h1>Output</h1></header>
			        <?php include_once "setup.php" ?>
            </section>
	        </main>
        </div>
      </div>
    </div>
    <?php include_once "skripte.php" ?>
  </body>
</html>
