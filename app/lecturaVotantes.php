<?php
            require_once '../vendor/autoload.php';
            require_once 'models/usuario.php';
            require_once 'database/database.php';
            require 'models/rol.php';
            /*$us = array('nombre '=>'alex','edad'=>'25');
            d($us);*/

            $usuarios = usuario::where('Rol_idRol','=',2)->get();


            echo '<table class="highlight  centered" ';
            echo '<tr>
                    <th>ID</th>
                    <th>CODIGO</th>
                    <th>PRIMER NOMBRE</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>PRIMER APELLIDO</th>
                    <th>SEGUNDO APELLIDO</th>
                    <th>ESTADO </th>
                    <th>ACCIONES</th>
                    </tr>';

            foreach($usuarios as $us){
                echo '<tr>
                        <td id="idColumn">'.$us['id'].'</td>
                        <td id="codigos">'.$us['codigo'].'</td>
                        <td id="nombre1">'.$us['nombre1'].'</td>
                        <td id="nombre2">'.$us['nombre2'].'</td>
                        <td id="apellido1">'.$us['apellido1'].'</td>
                        <td id="apellido2">'.$us['apellido2'].'</td>
                        <td id="estado">'.$us['estado'].'</td>
                        <td>
            <a class="modal-trigger" href="#modal2"><i class="material-icons accionesIcons editarIcon ">create</i></a>
            <i class="material-icons accionesIcons borrarIcon">delete</i>
            
            </td>
                    </tr>';
            }
        ?>