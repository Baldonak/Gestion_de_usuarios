<?php

    include "functions/Consulta_pass_base_datos.php";

    /*SESIONES*/ 

    session_start(); //Abrimos o recuperamos una sesión existente

    if (!isset($_SESSION["comptador"])) { //si no está creada la variable de sesión comptador, la creo con valor 0

        $_SESSION["comptador"] = 0;

    } else { // si ya existe...

        $_SESSION["comptador"]++; //le sumo 1

    }

    //COMPROBACIÓN USUARIO Y CONTRASEÑA BASE DE DATOS


    //EJECUCIÓN DE LA CONSULTA

    $Resultado = Consulta_pass_base_datos($_POST["user_name"]);

    if ($Resultado->num_rows > 0) { 

        while ($fila = $Resultado->fetch_assoc()) {

            $Pass = $fila["user_pass"];
            $Id = $fila["id"];
            $Email = $fila["email"];

            echo $Pass."<br>"; //Imprime la contraseña

            if ($_POST["user_pass"] == $Pass){
 
                $_SESSION["Nombre"] = $_POST["user_name"];
                $_SESSION["id"] = $Id;
                $_SESSION["email"] = $Email;
        
            }
        }
    }

    else
    {
    echo "No hi ha resultats...";
    }


    echo $_SESSION["Nombre"];

    header ("Location: urls/login.php"); //Nos sirve para redireccionar al archivo.*/
    exit();

  
?>