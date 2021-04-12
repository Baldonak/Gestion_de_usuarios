<?php

    include "../functions/Consulta_base_datos.php";

    /*SESIONES*/ 

    session_start(); //Abrimos o recuperamos una sesión existente

    if (!isset($_SESSION["comptador"])) { //si no está creada la variable de sesión comptador, la creo con valor 0

        $_SESSION["comptador"] = 0;

    } else { // si ya existe...

        $_SESSION["comptador"]++; //le sumo 1

    }

    //COMPROBACIÓN USUARIO Y CONTRASEÑA BASE DE DATOS

    /*

    Consulta_base_datos();

    while($fila = $Resultado->fetch_assoc()) {
                echo "<article class='film_container'>";
                        $Titulo = $fila["titol"];
                        echo "<p id='Titulo'>".$Titulo."</p><br>";


    */








    if (($_POST["Nombre"] == "admin") and ($_POST["Pass"] == "1234")){
 
        $_SESSION["Nombre"] = $_POST["Nombre"];

    }

    else {}

    echo $_SESSION["Nombre"];

    header ("Location: index.php"); //Nos sirve para redireccionar al archivo.
    exit();

  
?>