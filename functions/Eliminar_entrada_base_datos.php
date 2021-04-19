<?php
/*
Aquest exemple serveix per veure com insertar un registre a una base de base de dades
Les dades de connexió les ha d'omplir l'usuari.
La taula té aquests camps...
ID | NOMBRE | APELLIDOS | EDAD
*/
    include 'Subir_archivos.php';

//dades de connexió
    $Servidor = "localhost";
    $Usuario =  "registro_usuarios";
    $Pass = "";
    $Nombre_base_de_datos = "registro_usuarios";
    $Tabla = "usuarios";
    $Fecha_de_creacion = "created";

    //fem la connexió
    $conn = new mysqli($Servidor, $Usuario, $Pass, $Nombre_base_de_datos);

    // comprovem la connexió
    if ($conn->connect_error) {
        return "Fallada en la connexió: ".$conn->connect_error;
        die();
    }

//consulta
//INSERT INTO table_pellicules (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);

session_start();

$sql = "DELETE FROM $Tabla WHERE id = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("d", $Id);
     
        //Id a eliminar
            $Id = $_SESSION["id"];

    $stmt->execute();

    //ELIMINAR IMAGEN -------------------------------------------------------------

    $Ruta_definitiva = "../img/Fotos_de_perfil/$Id.jpg";

    if(isset($Ruta_definitiva)){

        unlink($Ruta_definitiva );
    }

    else{}


//executem_consulta
if ($conn->query($sql) === TRUE) { //tot ok
  echo "Ok! Registre afegit.";
} else { //error
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close(); //tanquem la connexió amb la base de dades

$nuevaURL = '../01-destroy.php';

header('Location: '.$nuevaURL);
?>
