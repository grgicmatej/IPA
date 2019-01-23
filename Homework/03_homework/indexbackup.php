<div class="grid-container">
      <div class="grid-x">
        <div class="large-12 cell">
          <main>
		        <section id="unos">
		        	<header><h1>Input</h1></header>
			        <form method="post">
                <label for="broj_redaka">Broj redaka</label>
                <input type="number" id="broj_redaka" min="1" max="10" value="5"/>
                <label for="broj_stupaca">Broj stupaca</label>
                <input type="number" id="broj_stupaca" min="1" max="10" value="5"/>
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