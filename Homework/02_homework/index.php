<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <?php include_once "head.php"?>
  <body>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell" style="text-align: center; padding-top:1cm;">
                <h1>Zadaca 02</h1><br>
                <h1>Tablica</h1><br>     
                <div class="center">
                    <form action="setup.php" method="GET"> <!-- Ovo poslije prebaci na index.php kad includas setup.php dolje-->
                        <input class= "formstil" type="text" placeholder="Upisi brojeve" name="broj">
                        <button class="formbutton" type="submit">Posalji</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "skripte.php"?>
  </body>
</html>
