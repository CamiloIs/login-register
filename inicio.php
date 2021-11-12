<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo  '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard responsive</title>

    <link rel="stylesheet" href="assets/css/estilos1.css">   
    <script src="https://kit.fontawesome.com/dd28ef7312.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fas fa-briefcase" id></i>
            <h4>Portafolio</h4>
        </div>

        <div class="options__menu">

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>  
                </div>
            </a>

            <a href="index2.php">
                <div class="option">
                    <i class="fas fa-file" title="Tareas"></i>
                    <h4>Tareas</h4>  
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fas fa-sticky-note" title="Sub"></i>
                    <h4>Gestor</h4>  
                </div>
            </a>
            <a href="php/cerrar_sesion.php">
                <div class="option">
                    <i class="fas fa-sign-out-alt" title="Flujo"></i>
                    <h4>Salir</h4>  
                </div>
            </a>
        </div>

       

    </div>
    <script src="assets/js/script1.js"></script>
</body>
<main>

    <h1>Process</h1><br>
    <p>Optimiza tus projectos con Process SA


    </p> <br>

    <p> 

        
    </p>
</main>

</html>