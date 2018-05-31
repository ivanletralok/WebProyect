<?php
    session_start();

    require_once '/opt/lampp/htdocs/illuminate/vendor/autoload.php';
    require_once '../models/rol.php';
    require_once '../models/usuario.php';
    require_once '../database/database.php';

    
    if(isset($_POST["userName"]) && isset($_POST["password"])){
       $Codigo = $_POST['userName'];
       $pass = $_POST['password'];

       $res = usuario::join("rol","usuario.id_rol", "=", "rol.id_rol")->where([
        ["usuario.id_rol", "=", 'A'] , 
        ["usuario.codigo", "=", $Codigo] ,
        ["usuario.password", "=", $pass]
        ])->get();

        if($res){
          $data = 1;
          session_start();
          $_SESSION['usuario']=$res;

        }
    }

    

  


  
      
      if(isset($_SESSION["name"])){
        $_SESSION["name"];
        echo "<p> < a href='login.php'> salir </a></p>";
      }else {
        header('location:login.php');
      }

  