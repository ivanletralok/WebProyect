<?php
            require_once '../vendor/autoload.php';
            require_once 'models/usuario.php';
            require_once 'database/database.php';
            require 'models/rol.php';
            /*$us = array('nombre '=>'alex','edad'=>'25');
            d($us);*/

            $usuarios = usuario::join('estado_usuario',
            'usuario.id_estado_usuario', '=', 'estado_usuario.id_estado_usuario')
            ->where('usuario.id_rol','=','V')->get();


            echo '<table id="tabless" class="highlight  centered"';
            echo '<tr>
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
                        <td id="idColumn">'.$us['codigo'].'</td>
                        <td id="nombre1">'.$us['nombre1'].'</td>
                        <td id="nombre2">'.$us['nombre2'].'</td>
                        <td id="apellido1">'.$us['apellido1'].'</td>
                        <td id="apellido2">'.$us['apellido2'].'</td>
                        <td id="estado">'.$us['nombre'].'</td>
                        <td>
            <a class="modal-trigger" href="#modal2"><i class="material-icons accionesIcons editarIcon ">create</i></a>
            <i class="material-icons accionesIcons borrarIcon">delete</i>
            
            </td>
                    </tr>';
            }
        ?>