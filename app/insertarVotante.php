<?php

    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'database/database.php';

    $codigo = $_POST['codigo'];
    $nombre1 = $_POST['primerNom'];
    $nombre2 = $_POST['segundoNom'];
    $apellido1 = $_POST['primerAPell'];
    $apellido2 = $_POST['segudoAPell'];
    $estado = $_POST['estado'];
    $password = $_POST['pass'];
    $tipoUsuario = $_POST['TipoUsuario'];
    $Rol = $_POST['Rol'];
    $id_programa = $_POST['id_programa'];
    $id_mesa = $_POST['id_Mesa'];






usuario::create([

    'codigo' => $codigo,
    'nombre1' => $nombre1,
    'nombre2' => $nombre2,
    'apellido1' => $apellido1,
    'apellido2' => $apellido2,
    'password' => $password,
    'id_tipo_usuario'=>$tipoUsuario,
    'id_rol' => $Rol,
    'id_programa'=> $id_programa,
    'id_mesa'=> $id_mesa,
    'id_estado_usuario'=> $estado,
]);

