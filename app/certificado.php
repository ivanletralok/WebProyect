<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css/certifistyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>certificado</title>
</head>

<body onload="certificado()">
    <div id="certificado">
        <div id="escudo_unimag"; style="display: flex; justify-content: center; margin-bottom: 30px;margin-top: 10px;">
          <img style="width: 100px; height: 100px;" src="https://pse.unimagdalena.edu.co/Content/Imagenes/escudo_unimag_sm.png" alt="escudo unimag">

        </div>
        <div class="datos"><span>CERTIFICADO ELECTORAL ELECCIONES 27 DE MAYO DE 2018</span></div>
        <div class="datos"><p>Cedula: <span id="cedula"></span></p></div>
        <div class="datos"> <p>Nombre: <span id="nombre"></span></p> </div>
        <div class="datos"><p>Apellido: <span id="apellido"></span></p></div>
        <div class="datos"> <p>Numero de mesa: <span id="mesa"></span></p></div>
    </div>

    <div id="botones">
          <button class="certif_btn" id="btnCorreo">Enviar al correo</button>
          <button class="cerrarS" id="btncerrar" >cerrar sesion</button>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script src="js/tarjeto.js"></script>
<script src="js/event.js"></script>

</html>
