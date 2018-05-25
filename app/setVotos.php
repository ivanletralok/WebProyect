<?php
    require_once '../vendor/autoload.php';
    require_once 'models/voto.php';
    require_once 'database/database.php';

    $datos = $_POST['datos'];

    foreach($datos[0] as $voto){
        voto::create([
            'id_mesa' => $datos[1],
            'id_candidato' => $voto,
        ]);
    }
    echo "creado";

    // voto::create([
    //     'id_mesa' => $id_mesa,
    //     'id_candidato' => $id_candidato,
    // ]);