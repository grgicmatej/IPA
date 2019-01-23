<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadaca 03</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
  <div class="grid-container">
      <div class="grid-x">
        <div class="large-12 cell">
          <main>
		        <section id="unos">
		        	<header><h1>Input</h1></header>
			        <form method="post">
                <label for="red"><p class="unostekst">Broj redaka</p></label>
                <input type="number" class="unos" id="red" min="1" max="10" value="5"/>
                <label for="stupac"><p class="unostekst">Broj stupaca</p></label>
                <input type="number" class="unos" id="stupac" min="1" max="10" value="5"/>
                <input type="button" id="kreiraj" value="Kreiraj tablicu"/>
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
