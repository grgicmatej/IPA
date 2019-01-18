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
                    <form action="index.php" method="POST"> 
                        <input class= "formstil" type="text" placeholder="Upisi brojeve" name="broj[]">
                        <button class="formbutton" type="submit">Posalji</button>
                    </form><br>
                </div>
                <?php include_once "setup.php"?>
            </div>
        </div>
    </div>
    <?php include_once "skripte.php"?>
  </body>
</html>
