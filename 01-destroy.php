<?php
    /*SESIONES*/ 

    session_start();                                                        //Abrimos o recuperamos una sesión existente

    if (session_id() != null and isset($_SESSION["comptador"])){ 

        echo "ID: ".session_id()."<br>";                                    //Mostrar la id de la sesión
        echo "El comptador s'ha quedat a: ".$_SESSION["comptador"]."<br>";  //Mostrar el contador.
        echo "Tanco la sessió..."."<br>";                                   //Informar que se va ha cerrar la sesión.

        if (session_destroy() == true){

            echo "Sessió tancada correctament.";                            //Informar al usuario.
        }
        else{

            echo "No se ha pogut tancar la sessió correctament";            //Informar que no se pudo cerrar sesión.
        }
    }
    else{                                                                   //Informar si no se ha iniciado sessión

        echo "No hi ha cap sessió iniciada. Primer inicia la sessio";
    }

    header ("Location: urls/login.php"); //Nos sirve para redireccionar al archivo.
    exit();


    
?>