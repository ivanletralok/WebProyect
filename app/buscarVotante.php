<?php

    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'database/database.php';

    $codigo = $_POST['buscarC'];

    $resultado = usuario::where('codigo','=',$codigo)->get();

       

