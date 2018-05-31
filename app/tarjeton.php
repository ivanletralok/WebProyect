<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="Css/estilo.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Tarjeton</title>
</head>

<body id="tarjeton">
  <div class="cabecera">
    <h2 class="title">Bienvenido al Tarjeton Electoral Unimag 2018</h2>
  </div>

  <h2>Por favor Elige un candidato por cada órgano</h2>

    <div class="nav">



        <!-- primer vaino -->
        <div class="nav2" id="consejoS">Consejo Superior

        </div>

        <!-- Modal Structure -->
        <div id="modal10" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="superior">
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="seleccionar" type="submit" href="#!" class="btn">seleccionar</button>
            </div>
        </div>
        <!-- primer vaino -->

        <!-- segundo vaino -->
        <div class="nav2" id="consejoA">Consejo Academico

        </div>

        <!-- Modal Structure -->
        <div id="modal11" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="Academico">
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="seleccionar" type="submit" href="#!" class="btn">seleccionar</button>
            </div>
        </div>
        <!-- segundo vaino -->


        <div class="nav2" id="consejoP">Consejo De Programa

        </div>


        <!-- tercer vaino -->
        <div id="modal12" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="Programa">
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="seleccionar" type="submit" href="#!" class="btn">seleccionar</button>
            </div>
        </div>


        <div class="nav2" id="consejoF">Consejo De Facultad


        </div>

        <!--cuarto vaino-->
        <div id="modal13" class="modal modal-fixed-footer">
            <div class="modal-content">
                <div class="Facultad">
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                    <div class="candidat"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="seleccionar" type="submit" href="#!" class="btn">seleccionar</button>
            </div>
        </div>

        <!-- Modal Trigger -->


                <button id="votar" type="submit" href="#!" class="btn">Votar</button>

</body>

<style>
    .superior,
    .Academico,
    .Programa,
    .Facultad {
        display: flex;
    }

    .candidat {
        cursor: pointer;
        display: flex;
        flex-direction: column;
    }

</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="js/tarjeto.js"></script>

</html>
