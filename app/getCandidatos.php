<?php
    require_once '../vendor/autoload.php';
    require_once 'models/candidato.php';
    require_once 'database/database.php';

    $id = $_POST['organo'];

   $resultado = candidatos::where('id_organo','=',$id)->get();

   if($resultado) echo json_encode($resultado);