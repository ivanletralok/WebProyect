<?php

    require_once '/opt/lampp/htdocs/illuminate/vendor/autoload.php';
    require_once '../models/rol.php';
    require_once '../models/usuario.php';
    require_once '../database/database.php';

    $Codigo = $_POST['userName'];
    $pass = $_POST['password'];

  $res = usuario::join("Rol","usuario.Rol_idRol", "=", "Rol.idRol")->where([
      ["usuario.Rol_idRol", "=", 1] , 
      ["usuario.codigo", "=", $Codigo] ,
      ["usuario.password", "=", $pass]
      ])->get();



  d($res);