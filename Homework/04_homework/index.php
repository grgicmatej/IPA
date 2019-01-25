<?php
session_start();
//var_dump($_POST);

$_SESSION['my_post'] = $_POST;

$ime = $_SESSION['my_post']['ime'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once "head.php"?>
  </head>
  <body>                               
    <?php include_once "izbornik.php"?>                                           
    <footer>  
      <?php include_once "podnozje.php"; ?>
    </footer>
  </body>
</html>