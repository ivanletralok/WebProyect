<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/estilo.css">
    <!-- Compiled and minified CSS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>Votantes</title>
</head>

<body>

    <nav>
        <span id="nameUser">nombre</span>
        <span class="cerrarS"> Cerrar S</span>
    </nav>

    <span class="title">
        <center>
            <h4>Listado de votantes</h4>
        </center>
    </span>



    <div class="buscar">
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="myInput" type="text" class="buscarCodigo" name="buscarC">
            <label for="icon_prefix">Buscar Por Codigo</label>
        </div>

    </div>


    <a id="insertIcon" class="btn-floating btn-large waves-effect waves-light blue">
        <i class="material-icons">add</i>
    </a>

    <div id="tableData">

    </div>

    <!-- Modal Structure -->
    <div id="modal2" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Editar</h4>

            <div class="row">


                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="primernombreNuevo" type="text" class="inputData validate">
                    <label id="primernombreNuevoLabel" for="icon_prefix" class="active">Primer nombre</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="segundonombreNuevo" type="text" class="inputData validate">
                    <label id="segundonombreNuevoLabel" for="icon_prefix" class="active">Segundo Nombre</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="primerapellidoNuevo" type="text" class="inputData validate">
                    <label id="primerapellidoNuevoLabel" for="icon_prefix" class="active">Primer Apellido</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="segundoapellidoNuevo" type="text" class="inputData validate">
                    <label id="segundoapellidoNuevoLabel" for="icon_prefix" class="active">Segundo Apellido</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="estadoNuevo" type="text" class="inputData validate">
                    <label id="estadoNuevoLabel" for="icon_prefix" class="active">Estado</label>
                </div>

                <div class="input-field col s4">
                    <input id="icon_prefix" name="idDB" type="hidden" class="inputData validate">
                    <button type="submit" id="botonEditar" href="#!" class="waves-effect waves-light btn modal-action modal-close waves-effect waves-green btn-flat">Actualizar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Structure  para inertar -->
    <div id="modal3" class="modal bottom-sheet">
        <div class="modal-content">
            <h4>Insertar</h4>
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="valida" name="codigo">
                    <label for="">Codigo</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="primerNom">
                    <label for="">Primer Nombre</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="segundoNom">
                    <label for="">Segundo Nombre</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="primerAPell">
                    <label for="">Primer Apellido</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="segudoAPell">
                    <label for="">Segundo Apellido</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="pass">
                    <label for="">Password</label>
                </div>



                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="TipoUsuario">
                    <label for="">Tipo de Usuario</label>
                </div>


                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="estado">
                    <label for="">Estado</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="id_programa">
                    <label for=""> Id_Programa </label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="" type="text" class="inputInsert" name="id_Mesa">
                    <label for=""> Id_Mesa </label>
                </div>


                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="Rol" type="text" class="inputData validate">
                    <button type="submit" id="InsertDato" href="#!" class="waves-effect waves-light btn modal-action modal-close waves-effect waves-green btn-flat">Insertar</button>
                    <label for="">Rol</label>
                </div>

                <div class="modal-footer">
                </div>
            </div>
        </div>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script src="js/event.js"></script>

<script>
    let user = window.localStorage.getItem('user');
    if(user != undefined)
    {
        user = $.parseJSON(user);
        $("#nameUser").html(user.nombre1 + ' ' + user.apellido1);
    }
</script>