<?php
    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'database/database.php';

    $id = $_POST['idEliminar'];

   $resultado = usuario::where('codigo','=',$id)->delete();

   if($resultado) echo 'Eliminado';
   else echo 'error';