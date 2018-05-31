<?php

    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'database/database.php';

    $userName = $_POST['username'];
    $password = $_POST['password'];

    $res = [];

    //$resultado = usuario::where('codigo',$userName)->where('password', $password)->get();

    $res = usuario::join("rol","usuario.id_rol", "=", "rol.id_rol")->where([
        ["usuario.codigo", "=", $userName] ,
        ["usuario.password", "=", $password]
        ])->first();
    
    print_r(json_encode($res));

    session_start();
    $_SESSION['usuario']=$res;



    
    //d($resultado);
       

