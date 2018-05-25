<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="Css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <title>candidatos</title>
</head>

<body>

    <span> <center><h5>Vista Candidatos </h5></center> </span>

    <?php
             require_once '../vendor/autoload.php';
            require_once 'database/database.php';
            require 'models/candidato.php';
            /*$us = array('nombre '=>'alex','edad'=>'25');
            d($us);*/
            
            $candidato = candidatos::get();

            echo '<table class="highlight" ';
            echo '<tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>#_CANDIDATO</th>
                    </tr>';

            foreach($candidato as $us){
                echo '<tr>
                        <td id="idColumn">'.$us['id'].'</td>
                        <td id="nombre">'.$us['nombre'].'</td>
                        <td id="apellido">'.$us['apellido'].'</td>
                        <td id="numero">'.$us['numero-candidato'].'</td>
                        <td>
            <a class="modal-trigger" href="#modal2"><i class="material-icons accionesIcons editarIcon ">create</i></a>
            <i class="material-icons accionesIcons borrarIcon">delete</i>
            
            </td>
                    </tr>';
            }


        ?>

</body>

</html>