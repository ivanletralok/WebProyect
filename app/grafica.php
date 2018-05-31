<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <link rel="stylesheet" href="css/graficstyle.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>



    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>grafica</title>
</head>

<body>
    <div class="cabecera">
      <h1><img src="https://pse.unimagdalena.edu.co/Content/Imagenes/escudo_unimag_sm.png" alt="escudo unimag">  Estadísticas Votantes</h1>
    </div>

    <?php
    require_once '../vendor/autoload.php';
    require_once 'models/usuario.php';
    require_once 'models/mesa.php';
    require_once 'models/lugar.php';
    require_once 'database/database.php';
    require 'models/rol.php';

            $usuarios = usuario::where('usuario.id_estado_usuario','<=',3)->count();
            $us= usuario::where('usuario.id_estado_usuario','=',4)->count();


        //    print_r($usuarios);
        //    echo '<br></br>';
        //    print_r($us);

    ?>
        <div class="container ">
            <div class="row">
                <div class="col s3"></div>
                <div class="col center-align ">
                <canvas id="myChart" width="400" height="400"></canvas>


                </div>
                <div class="col s3"></div>

            </div>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["no voto", "voto", ],
                    datasets: [{
                        label: '# of Votes',
                        data: [<?php echo $usuarios?>, <?php echo $us?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
</body>

</html>

<script>
</script>
