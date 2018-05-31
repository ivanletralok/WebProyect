<!DOCTYPE html>
<html lang="es">
    <?php 

        date_default_timezone_set('America/Chicago');

        $info = getdate();

        $hour = $info['hours'];
        $min = $info['minutes'];
        $sec = $info['seconds'];
        
        $current_date = date('H:i:s');
        
        //$hour = 15;
        //$min = 0;
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../Css/stil.css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Login</title>
    </head>
    
    <body>

    <?php if($hour >= 7 and $hour <= 15): ?>
        <?php if($min >= 0 and $min <= 59): ?>
            <form  id ="formLogin">
                <a>INGRESAR</a>
                    <input id="user" type="number" name="userName" placeholder="&#128221; CÓDIGO" class="us">
                </label>
                <label for="">
                    <input id="pass"  type="password"  name="password" placeholder="&#128273; PASSWORD" class="pass" >
                </label>
                <button id="login" class="btn loginButton"  type="submit">Login</button>
            </form>
        <?php else: ?>

            <div class="row" id="alertlog">
                <div class="col s12"> <h1 class="center-align">Aun no habilitado</h1></div>
            </div>
           
        <?php endif ?>       
    <?php else: ?>
            <div class="row" id="alertlog">
                <div class="container">
                    <div class="col s12"> <h1 class="center-align">Aún no habilitado</h1></div>
                </div>
            </div>
    <?php endif ?>        
            
    </body>
    
    <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</html>
