<?php
/*
Aquest exemple serveix per veure com insertar un registre a una base de base de dades
Les dades de connexió les ha d'omplir l'usuari.
La taula té aquests camps...
ID | NOMBRE | APELLIDOS | EDAD
*/
//  include 'Subir_archivos.php';

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



$sql = "INSERT INTO $Tabla (user_name, user_pass, email, user_type, status) 
        VALUES (?, ?, ?, ?, ?)";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssii", $user_name, $user_pass, $email, $status, $user_type);
     
        //dades del registre a insertar:
            $user_name = $_POST["user_name"];
            $user_pass = $_POST["user_pass"];
            $email = $_POST["email"];
            $status = '0'; 
            $user_type = '0'; 

    $stmt->execute();

$sql_total = "SELECT * FROM $Tabla ORDER BY $Fecha_de_creacion DESC ";

    //Subimos la imagen a la carpeta

        $Resultado = $conn->query($sql_total);

        $Fila = $Resultado->fetch_assoc();
            
        $Id = $Fila["id"];

        echo $Id;

    //SUBIR IMAGEN -------------------------------------------------------------

    //Subir_archivos('../img/Fotos_de_perfil', $_FILES['User_file'], $Id );
        //function Subir_archivos($directorio_destino, $nombre_fichero)*/

        $Ruta_temporal =  $_FILES['User_file']['tmp_name'];
        $Ruta_definitiva = "../img/Fotos_de_perfil/$Id.jpg";

        echo $Ruta_definitiva;
        
        move_uploaded_file($Ruta_temporal, $Ruta_definitiva );



//executem_consulta
if ($conn->query($sql) === TRUE) { //tot ok
  echo "Ok! Registre afegit.";
} else { //error
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close(); //tanquem la connexió amb la base de dades

$nuevaURL = '../_index.php';

header('Location: '.$nuevaURL);
?>
