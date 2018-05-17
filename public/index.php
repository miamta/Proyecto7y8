<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto 7y8</title>
  </head>
  <body>
    <h3>Botones: </h3>
    <BR>
    <form action="formularioinsertar.php">
      <input type="submit" value="Insertar">
      <br>
    </form>
    <br>
    <form action="formularioactualizar.php">
      <input type="submit" value="Actualizar">
    </form>
    <br>
    <form action="formularioborrar.php">
      <input type="submit" value="Borrar">
    </form>
  </body>
  </body>
</html>
