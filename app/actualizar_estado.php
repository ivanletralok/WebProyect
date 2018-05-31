<?php

require_once '../vendor/autoload.php';
require_once 'models/estado_usuario.php';
require_once 'models/usuario.php';
require_once 'database/database.php';

$actualizar = usuario::where('id_estado_usuario','=',1);



echo("hola");

