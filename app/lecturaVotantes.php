<?php
            require_once '../vendor/autoload.php';
            require_once 'models/usuario.php';
            require_once 'models/mesa.php';
            require_once 'models/lugar.php';
            require_once 'database/database.php';
            require 'models/rol.php';
            /*$us = array('nombre '=>'alex','edad'=>'25');
            d($us);*/
        
            session_start();
          $usuarios = usuario::join('estado_usuario',
          'usuario.id_estado_usuario', '=', 'estado_usuario.id_estado_usuario')
           ->where('usuario.id_rol','=','V')->where('id_mesa','=',$_SESSION['usuario']->id_mesa)->get();

        $mesa = mesa::where('id_mesa','=',$_SESSION['usuario']->id_mesa)->first();
        $lugar = lugar::where('id_lugar','=',$mesa->id_lugar)->first();


            echo '<table id="tabless" class="highlight  centered"';
            echo '<tr>
                    <th>CODIGO</th>
                    <th>PRIMER NOMBRE</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>PRIMER APELLIDO</th>
                    <th>SEGUNDO APELLIDO</th>
                    <th>ESTADO </th>
                    <th>ESTADO </th>
                    <th># DE MESA</th>
                    <th>LUGAR</th>
                    </tr>';
                

            foreach($usuarios as $us){
                echo '<tr>
                        <td id="idColumn">'.$us['codigo'].'</td>
                        <td id="nombre1">'.$us['nombre1'].'</td>
                        <td id="nombre2">'.$us['nombre2'].'</td>
                        <td id="apellido1">'.$us['apellido1'].'</td>
                        <td id="apellido2">'.$us['apellido2'].'</td>
                        <td id="estado">'.$us['id_estado_usuario'].'</td>
                        <td id="estado">'.$us['nombre'].'</td>
                        <td id="mesa">'.$us['id_mesa'].'</td>
                        <td id="lugar">'.$lugar['nombre'].'</td>
                        <td>
                        <a class="modal-trigger" href="#modal2"><i class="material-icons accionesIcons editarIcon ">create</i></a>
                        <a class="imprimir"><i class="material-icons accionesIcons  ">attach_file</i></a>
            
            </td>
                    </tr>';
            }
        ?>