<?php

    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'database/database.php';

//    $primernombreNuevo = $_POST['primernombreNuevo'];
//    $segundonombreNuevo = $_POST['segundonombreNuevo'];
//    $primerapellidoNuevo = $_POST['primerapellidoNuevo'];
//    $segundoapellidoNuevo = $_POST['segundoapellidoNuevo'];
   $estadoNuevo = $_POST['estadoNuevo'];
   $idDB = $_POST['idDB'];


   $resultado = usuario::where('codigo','=',$idDB);
   
   $resultado->update([//'nombre1'=> $primernombreNuevo,
                                                            // 'nombre2'=> $segundonombreNuevo,
                                                            // 'apellido1'=> $primerapellidoNuevo,
                                                            // 'apellido2'=> $segundoapellidoNuevo,
                                                            'id_estado_usuario'=> $estadoNuevo]);

   if($resultado) echo 'actualizado';
   else var_dump($resultado);

  

   