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
	<title>Registro</title>
</head>
<body>
	<header></header>
	<section>
		<article>
            <h3>Registro</h3>

            <form action="../functions/Insert_data_base.php" method="POST" enctype="multipart/form-data">
                <p>User name:<input type="text" id="user_name" name= "user_name"/></p>
				<p>Password:<input type="password" id="user_pass" name= "user_pass"/></p>
				<p>Repit the password:<input type="password" id="pass" name= "pass"/></p>
				<p>Email:<input type="email" id="email" name= "email"/></p>
				<p>Foto de perfil:<input type="file" name="User_file"></p><br>
                <button type="submit" >Enviar</button> 
                
            </form>

			<a>

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
						echo '<a href="01-destroy.php">Cerrar sesión</a>';
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