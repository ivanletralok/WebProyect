<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css/certifistyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Tarjeton</title>
</head>

<body onload="certificado()">
    <div id="certificado">
        <h1>Certificado electoral</h1>
        <h2>ELECCIONES</h2>
        <h3>Cedula número <span id="cedula"></span></h3>
        <h3>Nombre: <span id="nombre"></span></h3>
        <h3>Apellido: <span id="apellido"></span></h3>
        <h3>Mesa #<span id="mesa"></span></h3>
    </div>
    <button id="btnImprimir">Imprimir</button>
    <button id="btnCorreo">Enviar al correo</button>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script src="js/tarjeto.js"></script>

</html>