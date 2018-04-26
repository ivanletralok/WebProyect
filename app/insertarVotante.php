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
    $Rol = $_POST['Rol'];



usuario::create([

    'codigo' => $codigo,
    'nombre1' => $nombre1,
    'nombre2' => $nombre2,
    'apellido1' => $apellido1,
    'apellido2' => $apellido2,
    'estado' => $estado ,
    'password' => $password,
    'Rol_idrol' => $Rol

    

]);

