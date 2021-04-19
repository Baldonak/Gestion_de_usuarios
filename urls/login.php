<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">
	
	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css/style.css" type="text/css"/>
	
	<!--CSS Intern-->
	<style type="text/css">
		
	</style>
	
	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />
	
	<!-- Títol de la pàgina -->
	<title>Títol de la pàgina</title>
</head>
<body>
	<header></header>
	<section>
		<article>
            <h3>Sessions: Exercici 1</h3>

            <form action="../01-start.php" method="POST">
                <p>Usuario:<input type="text" id="user_name" name= "user_name"/></p>
				<p>Contraseña:<input type="password" id="user_pass" name= "user_pass"/></p>
                <button type="submit" >Enviar</button> 
                
            </form>

			<a href="register.php">Crear cuenta</a>

            <br><br>

            <?php

            session_start(); //Para poder utilizar las variables de sesión (Reanudar la sesión)

                if (!isset($_SESSION["comptador"])){ 

                    echo "No et conèc <br>";
                }
                else{ 

					if (isset($_SESSION["Nombre"])){
						echo '<style> form {display: none;} </style>';
                    	echo "Hola ".($_SESSION["Nombre"])." !<br>";

						$img_path = '../img/Fotos_de_perfil/'.$_SESSION["id"].'.jpg';

						if (file_exists($img_path)){
							echo "<img src='".$img_path."' width='30px' height='30px'>";
							echo "<br>";
							echo "(con imagen)";
							echo "<br>";
							echo "id del usuario: ".$_SESSION["id"];
							echo "<br>";
						}
						else{
							echo "<img src='../img/Fotos_de_perfil/anonimo.jpg' width='30px' height='30px'>";
							echo "<br>";
							echo "(sin imagen)";
							echo "<br>";
							echo "id del usuario: ".$_SESSION["id"];
							echo "<br>";
						}
						
						
						echo '<a href="modify.php">Modificar</a>';
						echo "<br>";
						echo '<a href="../functions/Eliminar_entrada_base_datos.php">Eliminar perfil</a>';
						echo "<br>";
						echo '<a href="../01-destroy.php">Cerrar sesión</a>';

					}
					else {
						echo "No se ha introducido el usuario y/o la contraseña correcta";
					}
                }

            ?>



		</article>
	</section>
	<footer></footer>
</body>
</html>