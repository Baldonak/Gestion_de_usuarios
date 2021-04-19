<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">
	
	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="../css/style_2.css" type="text/css"/>
	
	<!--CSS Intern-->
	<style type="text/css">
		
	</style>

	<!--JQUERY-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" ></script> 

	<!-- External checkuser JS -->
	<script  type="text/javascript" src="../js/checkuser.js"></script>
	
	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="../js/javascript.js"></script>
	
	<!-- favicon -->
	<link href="../img/favicon.png" rel="icon" type="image/png" />
	
	<!-- Títol de la pàgina -->
	<title>Modificar</title>
</head>
<body>
	<header></header>

    <?php
        session_start();
        
    ?>
	<section>
		<article>
            <h3>Modificar</h3>

            <form action="../functions/Actualizar_base_datos.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="Id" value= <?php echo $_SESSION["id"]; ?> > 
                <p>User name:<input type="text" id="user_name" name= "user_name" oninput="check()"
                value= "<?php echo $_SESSION["Nombre"]; ?>"/></p>
					<span id="missatge"></span>
					<p><img src="../img/preloader.gif" id="preloader" style="display:none" ></p>
				<p>Email:<input type="email" id="email" name= "email" value= "<?php echo $_SESSION["email"]; ?>"/></p>
				<p>Foto de perfil:<input type="file" name="User_file"></p><br>
                <button type="submit" >Enviar</button> 
                
            </form>

			<a>

            <br><br>

            

		</article>
	</section>
	<footer></footer>
</body>
</html>